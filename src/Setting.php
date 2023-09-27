<?php

namespace Sparkinzy\DcatMarketPlace;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function form()
    {
        $this->text('path')
             ->default('dcat-extension-client')
             ->required();
    }
}
