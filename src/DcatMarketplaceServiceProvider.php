<?php

namespace Sparkinzy\DcatMarketPlace;

use Dcat\Admin\Extend\ServiceProvider;

class DcatMarketplaceServiceProvider extends ServiceProvider
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
