<?php

namespace Database\Seeders;

use Sparkinzy\DcatExtensionClient\Models;
use Illuminate\Database\Seeder;

class AdminExtensionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // extensions table
        Sparkinzy\DcatExtensionClient\Models\AdminExtensionRepository::truncate();
        Sparkinzy\DcatExtensionClient\Models\AdminExtensionRepository::insert(
            [
                [
                    "logo" => NULL,
                    "title" => "sparkinzy.dcat-websocket",
                    "detail" => "为Dcat Admin 一键集成websocket功能",
                    "home_page" => "https://github.com/sparkinzy/dcat-websocket",
                    "zip_url" => "https://github.com/Sparkinzy/dcat-websocket/archive/refs/tags/1.0.1.zip",
                    "version" => "1.0.1",
                    "created_at" => "2022-11-01 15:45:51",
                    "updated_at" => "2022-11-01 15:45:51"
                ],
                [
                    "logo" => NULL,
                    "title" => "sparkinzy.dcat-viewer",
                    "detail" => "基于 神级插件 viewerjs 做的一个封装，提升Dcat Admin 图片预览效果，实现放大、缩小、翻转、旋转等效果",
                    "home_page" => "https://github.com/Sparkinzy/dcat-viewer",
                    "zip_url" => "https://github.com/Sparkinzy/dcat-viewer/archive/refs/tags/1.0.3.zip",
                    "version" => "1.0.3",
                    "created_at" => "2022-09-28 23:49:07",
                    "updated_at" => "2022-09-28 23:49:07"
                ],
                [
                    "logo" => NULL,
                    "title" => "sparkinzy.dcat-distpicker",
                    "detail" => "中国省市区三级联动选择组件，",
                    "home_page" => "https://codeload.github.com/Sparkinzy/dcat-distpicker",
                    "zip_url" => "https://codeload.github.com/Sparkinzy/dcat-distpicker/zip/refs/tags/1.0.10",
                    "version" => "1.0.10",
                    "created_at" => "2022-09-28 23:51:12",
                    "updated_at" => "2022-09-28 23:51:12"
                ],
                [
                    "logo" => NULL,
                    "title" => "guanguans.dcat-login-captcha",
                    "detail" => "dcat admin 登录验证码。",
                    "home_page" => "https://github.com/guanguans/dcat-login-captcha",
                    "zip_url" => "https://github.com/guanguans/dcat-login-captcha/archive/refs/tags/v1.0.9.zip",
                    "version" => "1.0.9",
                    "created_at" => "2022-09-27 00:45:51",
                    "updated_at" => "2022-09-27 00:45:51"
                ],
                [
                    "logo" => NULL,
                    "title" => "dcat-admin.operation-log",
                    "detail" => "操作日志",
                    "home_page" => "https://github.com/dcat-admin/operation-log",
                    "zip_url" => "https://codeload.github.com/dcat-admin/operation-log/zip/refs/heads/master",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-28 23:57:25",
                    "updated_at" => "2022-09-28 23:57:25"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiwait.dcat-cropper",
                    "detail" => "图片裁剪",
                    "home_page" => "https://github.com/weiwait/dcat-cropper",
                    "zip_url" => "https://github.com/weiwait/dcat-cropper/archive/refs/heads/master.zip",
                    "version" => "1.1.8",
                    "created_at" => "2022-09-29 00:10:41",
                    "updated_at" => "2022-09-29 00:10:41"
                ],
                [
                    "logo" => NULL,
                    "title" => "celaraze.dcat-extension-plus",
                    "detail" => "增强 Dcat Admin 使用体验！在线简化配置、UI优化、字段扩展。",
                    "home_page" => "https://github.com/celaraze/dcat-extension-plus",
                    "zip_url" => "https://github.com/celaraze/dcat-extension-plus/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-29 00:01:52",
                    "updated_at" => "2022-09-29 00:01:52"
                ],
                [
                    "logo" => NULL,
                    "title" => "asundust.dcat-auth-captcha",
                    "detail" => "登录 滑动验证插件",
                    "home_page" => "https://github.com/asundust/dcat-auth-captcha",
                    "zip_url" => "https://github.com/asundust/dcat-auth-captcha/archive/refs/tags/2.0.2.zip",
                    "version" => "2.0.2",
                    "created_at" => "2022-09-28 23:53:47",
                    "updated_at" => "2022-09-28 23:53:47"
                ],
                [
                    "logo" => NULL,
                    "title" => "abovesky.media-player",
                    "detail" => "Dcat Admin 视频/音频预览扩展",
                    "home_page" => "https://github.com/dcat-admin-extensions/media-player",
                    "zip_url" => "https://github.com/dcat-admin-extensions/media-player/archive/refs/heads/main.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-29 00:07:45",
                    "updated_at" => "2022-09-30 10:15:04"
                ],
                [
                    "logo" => NULL,
                    "title" => "dcat-admin.form-step",
                    "detail" => "Dcat Admin 分步表单扩展",
                    "home_page" => "https://github.com/dcat-admin/form-step",
                    "zip_url" => "https://github.com/dcat-admin/form-step/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-29 00:09:37",
                    "updated_at" => "2022-09-29 00:09:37"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiwait.dcat-cropper",
                    "detail" => "图片裁剪",
                    "home_page" => "https://github.com/weiwait/dcat-cropper",
                    "zip_url" => "https://github.com/weiwait/dcat-cropper/archive/refs/heads/master.zip",
                    "version" => "1.1.8",
                    "created_at" => "2022-09-29 00:10:41",
                    "updated_at" => "2022-09-29 00:10:41"
                ],
                [
                    "logo" => NULL,
                    "title" => "celaraze.dcat-extension-plus",
                    "detail" => "增强 Dcat Admin 使用体验！在线简化配置、UI优化、字段扩展。",
                    "home_page" => "https://github.com/celaraze/dcat-extension-plus",
                    "zip_url" => "https://github.com/celaraze/dcat-extension-plus/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-29 00:11:38",
                    "updated_at" => "2022-09-29 00:11:38"
                ],
                [
                    "logo" => NULL,
                    "title" => "lty5240.dcat-easy-sku",
                    "detail" => "基于Dcat Admin的Sku插件",
                    "home_page" => "https://github.com/light-speak/dcat-easy-sku",
                    "zip_url" => "https://github.com/light-speak/dcat-easy-sku/archive/refs/heads/master.zip",
                    "version" => "1.1.0",
                    "created_at" => "2022-09-29 00:13:12",
                    "updated_at" => "2022-09-29 00:13:12"
                ],
                [
                    "logo" => NULL,
                    "title" => "lake.login-captcha",
                    "detail" => "登陆验证码",
                    "home_page" => "https://github.com/deatil/dcat-login-captcha",
                    "zip_url" => "https://github.com/deatil/dcat-login-captcha/archive/refs/heads/main.zip",
                    "version" => "1.0.9",
                    "created_at" => "2022-09-30 09:54:13",
                    "updated_at" => "2022-09-30 09:54:13"
                ],
                [
                    "logo" => NULL,
                    "title" => "asundust.dcat-auth-captcha",
                    "detail" => "登录 (滑动)验证插件 多平台支持",
                    "home_page" => "https://github.com/asundust/dcat-auth-captcha",
                    "zip_url" => "https://github.com/asundust/dcat-auth-captcha/archive/refs/heads/master.zip",
                    "version" => "2.0.2",
                    "created_at" => "2022-09-30 09:55:26",
                    "updated_at" => "2022-09-30 09:55:26"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiaibaicai.dcat-exception-reporter",
                    "detail" => "异常报告。",
                    "home_page" => "https://github.com/weiaibaicai/dcat-exception-reporter",
                    "zip_url" => "https://github.com/weiaibaicai/dcat-exception-reporter/archive/refs/heads/master.zip",
                    "version" => "1.0.2",
                    "created_at" => "2022-09-30 09:57:36",
                    "updated_at" => "2022-09-30 09:57:36"
                ],
                [
                    "logo" => NULL,
                    "title" => "Gelaku.dcat-backup",
                    "detail" => "数据库备份或还原。",
                    "home_page" => "https://github.com/Gelaku/dcat-backup",
                    "zip_url" => "https://github.com/Gelaku/dcat-backup/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 09:58:22",
                    "updated_at" => "2022-09-30 09:58:22"
                ],
                [
                    "logo" => NULL,
                    "title" => "Ghost-die.dcat-backup",
                    "detail" => "数据库备份。",
                    "home_page" => "https://github.com/Ghost-die/dcat-backup",
                    "zip_url" => "https://github.com/Ghost-die/dcat-backup/archive/refs/heads/master.zip",
                    "version" => "1.0.1",
                    "created_at" => "2022-09-30 09:59:12",
                    "updated_at" => "2022-09-30 09:59:12"
                ],
                [
                    "logo" => NULL,
                    "title" => "dairidong.dcat-media-manager",
                    "detail" => "文件管理扩展,适配laravel9以下，laravel9需要v2",
                    "home_page" => "https://github.com/dairidong/dcat-media-manager",
                    "zip_url" => "https://github.com/dairidong/dcat-media-manager/archive/refs/tags/1.04.zip",
                    "version" => "1.0.4",
                    "created_at" => "2022-09-30 10:01:54",
                    "updated_at" => "2022-09-30 10:02:45"
                ],
                [
                    "logo" => NULL,
                    "title" => "edwinhuish.dcat-file-manager",
                    "detail" => "文件管理器\r\n注：缺乏文档",
                    "home_page" => "https://github.com/edwinhuish/dcat-file-manager",
                    "zip_url" => "https://github.com/edwinhuish/dcat-file-manager/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:03:59",
                    "updated_at" => "2022-09-30 10:03:59"
                ],
                [
                    "logo" => NULL,
                    "title" => "andyhuang123.files-manger",
                    "detail" => "本地文件管理\r\n注：文档参考 https://github.com/laravel-admin-extensions/media-manager",
                    "home_page" => "https://github.com/andyhuang123/files-manger",
                    "zip_url" => "https://github.com/andyhuang123/files-manger/archive/refs/heads/main.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:05:16",
                    "updated_at" => "2022-09-30 10:05:16"
                ],
                [
                    "logo" => NULL,
                    "title" => "duolabmeng6.dcat-config",
                    "detail" => "系统变量配置管理 用于配置系统中各种的动态变量 dcat-admin 插件",
                    "home_page" => "https://github.com/duolabmeng6/dcat-config",
                    "zip_url" => "https://github.com/duolabmeng6/dcat-config/archive/refs/heads/main.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:06:37",
                    "updated_at" => "2022-09-30 10:06:37"
                ],
                [
                    "logo" => NULL,
                    "title" => "duolabmeng6.dcat-env",
                    "detail" => "查看系统中env文件的\r\n注：不能编辑",
                    "home_page" => "https://github.com/duolabmeng6/dcat-env",
                    "zip_url" => "https://github.com/duolabmeng6/dcat-env/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:07:45",
                    "updated_at" => "2022-09-30 10:07:45"
                ],
                [
                    "logo" => NULL,
                    "title" => "duolabmeng6.dcat-log-viewer",
                    "detail" => "错误日志查看",
                    "home_page" => "https://github.com/duolabmeng6/dcat-log-viewer",
                    "zip_url" => "https://github.com/duolabmeng6/dcat-log-viewer/archive/refs/heads/main.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:08:47",
                    "updated_at" => "2022-09-30 10:08:47"
                ],
                [
                    "logo" => NULL,
                    "title" => "slowlyo.dcat-amis",
                    "detail" => "Amis 组件库。",
                    "home_page" => "https://gitee.com/slowlyo/dcat-amis",
                    "zip_url" => "https://gitee.com/slowlyo/dcat-amis/repository/archive/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:09:39",
                    "updated_at" => "2022-09-30 10:09:39"
                ],
                [
                    "logo" => NULL,
                    "title" => "jyiL.crontab-extension",
                    "detail" => "定时任务，任务列表，日志列表。",
                    "home_page" => "https://github.com/jyiL/crontab-extension",
                    "zip_url" => "https://github.com/jyiL/crontab-extension/archive/refs/heads/master.zip",
                    "version" => "1.0.3",
                    "created_at" => "2022-09-30 10:10:53",
                    "updated_at" => "2022-09-30 10:10:53"
                ],
                [
                    "logo" => NULL,
                    "title" => "dcat-admin-extensions.lightbox",
                    "detail" => "图片预览扩展\r\n注：表格和详情需要主动使用对应方案才能启用",
                    "home_page" => "https://github.com/dcat-admin-extensions/lightbox",
                    "zip_url" => "https://github.com/dcat-admin-extensions/lightbox/archive/refs/heads/master.zip",
                    "version" => "1.0.1",
                    "created_at" => "2022-09-30 10:12:41",
                    "updated_at" => "2022-09-30 10:12:41"
                ],
                [
                    "logo" => NULL,
                    "title" => "xingchuangyang.dcat-admin-sortable",
                    "detail" => "表格排序。",
                    "home_page" => "https://github.com/18310691938/doct-admin-sortable",
                    "zip_url" => "https://github.com/18310691938/doct-admin-sortable/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:16:37",
                    "updated_at" => "2022-09-30 10:16:37"
                ],
                [
                    "logo" => NULL,
                    "title" => "canbez.dcat-theme",
                    "detail" => "一款双栏菜单主题",
                    "home_page" => "https://github.com/canbez/dcat-theme",
                    "zip_url" => "https://github.com/canbez/dcat-theme/archive/refs/heads/master.zip",
                    "version" => "1.0.4",
                    "created_at" => "2022-09-30 10:18:57",
                    "updated_at" => "2022-09-30 10:18:57"
                ],
                [
                    "logo" => NULL,
                    "title" => "hercules-os.dcat-ant-theme",
                    "detail" => "ant design 风格的主题\r\n注：新装和重新安装，都需要手动执行：\r\nphp artisan admin:minify ant --color 1890ff --publish",
                    "home_page" => "https://github.com/hercules-os/dcat-ant-theme",
                    "zip_url" => "https://github.com/hercules-os/dcat-ant-theme/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:20:40",
                    "updated_at" => "2022-09-30 10:20:40"
                ],
                [
                    "logo" => NULL,
                    "title" => "de-memory.dcat-media-selector",
                    "detail" => "表单媒体资源选择器\r\n注：如果支持资源列表通过url返回就更好了",
                    "home_page" => "https://github.com/de-memory/dcat-media-selector",
                    "zip_url" => "https://github.com/de-memory/dcat-media-selector/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:24:33",
                    "updated_at" => "2022-09-30 10:24:54"
                ],
                [
                    "logo" => NULL,
                    "title" => "lake.form-media",
                    "detail" => "表单媒体扩展",
                    "home_page" => "https://github.com/deatil/dcat-form-media",
                    "zip_url" => "https://github.com/deatil/dcat-form-media/archive/refs/heads/master.zip",
                    "version" => "1.0.31",
                    "created_at" => "2022-09-30 10:26:12",
                    "updated_at" => "2022-09-30 10:26:12"
                ],
                [
                    "logo" => NULL,
                    "title" => "super-eggs.dcat-distpicker",
                    "detail" => "中国省市区三级联动选择组件",
                    "home_page" => "https://github.com/super-eggs/dcat-distpicker",
                    "zip_url" => "https://github.com/super-eggs/dcat-distpicker/archive/refs/heads/master.zip",
                    "version" => "2.1.2",
                    "created_at" => "2022-09-30 10:27:20",
                    "updated_at" => "2022-09-30 10:27:20"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiwait.dcat-distpicker",
                    "detail" => "中国区划级联 + 坐标拾取",
                    "home_page" => "https://github.com/weiwait/dcat-distpicker",
                    "zip_url" => "https://github.com/weiwait/dcat-distpicker/archive/refs/heads/master.zip",
                    "version" => "1.0.5",
                    "created_at" => "2022-09-30 10:28:23",
                    "updated_at" => "2022-09-30 10:28:23"
                ],
                [
                    "logo" => NULL,
                    "title" => "Abbotton.dcat-sku-plus",
                    "detail" => "SKU扩展增强版",
                    "home_page" => "https://github.com/Abbotton/dcat-sku-plus",
                    "zip_url" => "https://github.com/Abbotton/dcat-sku-plus/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:29:17",
                    "updated_at" => "2022-09-30 10:29:17"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiaibaicai.ueditor",
                    "detail" => "百度编辑器。",
                    "home_page" => "https://github.com/weiaibaicai/ueditor",
                    "zip_url" => "https://github.com/weiaibaicai/ueditor/archive/refs/heads/master.zip",
                    "version" => "1.0.2",
                    "created_at" => "2022-09-30 10:30:13",
                    "updated_at" => "2022-09-30 10:30:13"
                ],
                [
                    "logo" => NULL,
                    "title" => "jqhph.dcat-admin-ueditor",
                    "detail" => "集成百度在线编辑器",
                    "home_page" => "https://github.com/jqhph/dcat-admin-ueditor",
                    "zip_url" => "https://github.com/jqhph/dcat-admin-ueditor/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:30:49",
                    "updated_at" => "2022-09-30 10:30:49"
                ],
                [
                    "logo" => NULL,
                    "title" => "laradocs.dcat-neditor",
                    "detail" => "neditor 编辑器，集成 135 编辑器，方便用户使用 135 编辑器的模板与海量功能。",
                    "home_page" => "https://github.com/laradocs/dcat-neditor",
                    "zip_url" => "https://github.com/laradocs/dcat-neditor/archive/refs/heads/master.zip",
                    "version" => "1.0.1",
                    "created_at" => "2022-09-30 10:31:18",
                    "updated_at" => "2022-09-30 11:03:13"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiaibaicai.big-file-upload",
                    "detail" => "大文件上传（分片，目前仅支持七牛）。",
                    "home_page" => "https://github.com/weiaibaicai/big-file-upload",
                    "zip_url" => "https://github.com/weiaibaicai/big-file-upload/archive/refs/heads/master.zip",
                    "version" => "1.0.1",
                    "created_at" => "2022-09-30 10:31:59",
                    "updated_at" => "2022-09-30 10:31:59"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiwait.dcat-cropper",
                    "detail" => "单图裁剪",
                    "home_page" => "https://github.com/weiwait/dcat-cropper",
                    "zip_url" => "https://github.com/weiwait/dcat-cropper/archive/refs/heads/master.zip",
                    "version" => "1.0.8",
                    "created_at" => "2022-09-30 10:32:26",
                    "updated_at" => "2022-09-30 10:32:26"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiwait.dcat-smtp",
                    "detail" => "Laravel smtp 邮件服务便捷配置",
                    "home_page" => "https://github.com/weiwait/dcat-smtp",
                    "zip_url" => "https://github.com/weiwait/dcat-smtp/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:33:34",
                    "updated_at" => "2022-09-30 10:33:34"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiwait.dcat-easy-sms",
                    "detail" => "快捷短信通知配置",
                    "home_page" => "https://github.com/weiwait/dcat-easy-sms",
                    "zip_url" => "https://github.com/weiwait/dcat-easy-sms/archive/refs/heads/master.zip",
                    "version" => "1.0.2",
                    "created_at" => "2022-09-30 10:34:22",
                    "updated_at" => "2022-09-30 10:34:22"
                ],
                [
                    "logo" => NULL,
                    "title" => "Slowlyo.dcat-diy-form",
                    "detail" => "自定义表单\r\n使用文档：https://learnku.com/articles/69062",
                    "home_page" => "https://github.com/Slowlyo/dcat-diy-form",
                    "zip_url" => "https://github.com/Slowlyo/dcat-diy-form/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 10:35:18",
                    "updated_at" => "2022-09-30 10:35:18"
                ],
                [
                    "logo" => NULL,
                    "title" => "Abbotton.dcat-infinity-select",
                    "detail" => "无限级联动Select组件",
                    "home_page" => "https://github.com/Abbotton/dcat-infinity-select",
                    "zip_url" => "https://github.com/Abbotton/dcat-infinity-select/archive/refs/heads/main.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 11:27:58",
                    "updated_at" => "2022-09-30 11:27:58"
                ],
                [
                    "logo" => NULL,
                    "title" => "weiwait.dcat-vue",
                    "detail" => "将vue3融入dcat admin",
                    "home_page" => "https://github.com/weiwait/dcat-vue",
                    "zip_url" => "https://github.com/weiwait/dcat-vue/archive/refs/heads/master.zip",
                    "version" => "2.1.1",
                    "created_at" => "2022-09-30 11:29:37",
                    "updated_at" => "2022-09-30 11:29:37"
                ],
                [
                    "logo" => NULL,
                    "title" => "dedemao.dcat-admin-payjs",
                    "detail" => "适用于dcat-admin的payjs插件",
                    "home_page" => "https://github.com/dedemao/dcat-admin-payjs",
                    "zip_url" => "https://github.com/dedemao/dcat-admin-payjs/archive/refs/heads/master.zip",
                    "version" => "1.0.3",
                    "created_at" => "2022-09-30 11:31:52",
                    "updated_at" => "2022-09-30 11:31:52"
                ],
                [
                    "logo" => NULL,
                    "title" => "xingchuangyang.dcat-server-monitor",
                    "detail" => "服务监控面板",
                    "home_page" => "https://github.com/18310691938/dcat-server-monitor",
                    "zip_url" => "https://github.com/18310691938/dcat-server-monitor/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 11:32:53",
                    "updated_at" => "2022-09-30 11:32:53"
                ],
                [
                    "logo" => NULL,
                    "title" => "strays.dcat-admin-redis",
                    "detail" => "Redis 可视化操作面板",
                    "home_page" => "https://github.com/23tl/dcat-admin-redis",
                    "zip_url" => "https://github.com/23tl/dcat-admin-redis/archive/refs/heads/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 11:40:21",
                    "updated_at" => "2022-09-30 11:47:53"
                ],
                [
                    "logo" => NULL,
                    "title" => "ghost.dcat-markdown",
                    "detail" => "markdown 编辑器 支持本地图片拖拽上传",
                    "home_page" => "https://gitee.com/dcat-phper/dcat-markdown",
                    "zip_url" => "https://gitee.com/dcat-phper/dcat-markdown/repository/archive/master.zip",
                    "version" => "1.0.0",
                    "created_at" => "2022-09-30 11:42:05",
                    "updated_at" => "2022-09-30 11:42:05"
                ]
            ]
        );
        // finish
    }
}
