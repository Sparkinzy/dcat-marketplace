<?php

namespace Sparkinzy\DcatExtensionClient;

use Dcat\Admin\Extend\ServiceProvider;

class DcatExtensionClientServiceProvider extends ServiceProvider
{
    protected $js = [
    ];
    protected $css = [
    ];

    public function register()
    {
        //
    }

    public function init()
    {
        parent::init();

        //
    }

    public function settingForm()
    {
        return new Setting($this);
    }
}
