<?php

namespace Sparkinzy\DcatExtensionClient\Actions\Grid;

use Dcat\Admin\Actions\Response;
use Dcat\Admin\Admin;
use Dcat\Admin\Grid\RowAction;
use Dcat\Admin\Traits\HasPermissions;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Sparkinzy\DcatExtensionClient\Traits\DownloadZipTrait;

class AdminExtensionInstallAction extends RowAction
{
    use DownloadZipTrait;

    /**
     * @return string
     */
    protected $title = '安装&nbsp;&nbsp;';

    /**
     * Handle the action request.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(Request $request)
    {
        $zip_url = $request->get('zip_url');
        $title = $request->get('title');
        $zip_name = substr(
            $zip_url,
            strrpos($zip_url, '/') + 1,
        );
        $zip_version = trim($zip_name, '.zip');
        $extension_dir = storage_path('extensions');
        if (!is_dir($extension_dir)) {
            mkdir($extension_dir);
        }
        $zip_file = $extension_dir.'/'.$title.'-'.$zip_version.'.zip';

        try {
            if (!file_exists($zip_file)) {
                $this->downloadZipFile($zip_url, $zip_file);
                if (!file_exists($zip_file)) {
                    return $this->response()
                                ->error('压缩包下载失败');
                }
            }
            $manager = Admin::extension();
            $extensionName = $manager->extract($zip_file, true);
            $manager
                ->load()
                ->updateManager()
                ->update($extensionName);

            return $this->response()
                        ->success(implode('<br>', $manager->updateManager()->notes))
                        ->refresh();
        } catch (\Throwable $e) {
            Admin::reportException($e);

            return $this->response()->error($e->getMessage());
        } finally {
            if (!empty($zip_file)) {
                @unlink($zip_file);
            }
        }
    }

    public function actionScript()
    {
        // 发起请求之前回调，返回false可以中断请求
        return <<<'JS'
function (data, target, action) {
    $(target).buttonLoading();
    setTimeout(function() {
      $(target).buttonLoading(false);
    },60000)
    // 理论上应该发起后端应用，比如使用websocket,
    // 使用队列下载，ajax轮训查询进度
    // 下载和安装都可以在异步队列中进行
    // console.log(data,target,action)
    return true;
 }
JS;
    }

    /**
     * 设置请求出错回调，返回false可以中断默认的错误处理逻辑.
     *
     * @return string
     */
    protected function rejectScript()
    {
        return <<<'JS'
function (target, results) {
    console.log(target)
    $(target).buttonLoading(false);
}
JS;
    }

    /**
     * @return string|array|void
     */
    public function confirm()
    {
        return ['确认?', '确认安装扩展【'.$this->row()->title.'】'];
    }

    /**
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    /**
     * @return array
     */
    protected function parameters()
    {
        return [
            'zip_url' => $this->row->zip_url,
            'title'   => $this->row->title,
            'version' => $this->row->version,
        ];
    }

    /**
     * 获取本地插件版本.
     *
     * @param $name
     *
     * @return array|mixed|null
     */
    protected function getPluginVersion($name)
    {
        // 数据库数据主要针对已安装扩展的启用和禁用，真实数据还要从
        $installed_extenion = Admin::extension($name);

        return $installed_extenion->version ?? null;
    }
}
