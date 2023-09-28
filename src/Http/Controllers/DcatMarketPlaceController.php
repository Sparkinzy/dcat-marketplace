<?php

namespace Sparkinzy\DcatMarketPlace\Http\Controllers;

use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;
use Sparkinzy\DcatMarketPlace\Actions\Grid\AdminExtensionInstallAction;
use Sparkinzy\DcatMarketPlace\Displayers\TextActions;
use Sparkinzy\DcatMarketPlace\Repositories\AdminExtensionRepository;

class DcatMarketPlaceController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->title('应用市场')
            ->description('主要收集一些符合dcat扩展格式的包')
            ->body($this->grid());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AdminExtensionRepository(), function (Grid $grid) {
            $grid->disableRowSelector();
            $grid->setActionClass(TextActions::class);
            $grid->disableCreateButton();
            $grid->column('#')
                 ->display(function ()use($grid){
                     return '#'.($this->_index+1+request('per_page',$grid->getPerPage())*(request('page',1)-1));
                 })->width(60);
            $grid->column('title', '包名')
                 ->display(function ($title) {
                     return <<<HTML
<a target="_blank" href="{$this->home_page}"><i class="feather icon-globe"></i>&nbsp;{$title}</a>
HTML;
                 })
                 ->width(350);
            $grid->column('detail', '描述');
            $grid->column('version', '当前版本')->width(120);

            $grid->actions(function (Grid\Displayers\Actions $actions) {
                if (Admin::extension()->has($actions->row->title)) {
                    $title = '重新安装&nbsp;&nbsp;';
                } else {
                    $title = '安装&nbsp;&nbsp;';
                }
                $actions->prepend(AdminExtensionInstallAction::make($title));

                $actions->disableDelete();
                $actions->disableQuickEdit();
                $actions->disableView();
                $actions->disableEdit();
            });
            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('title', '包名');
                $filter->panel()->expand();
            });
        });
    }
}
