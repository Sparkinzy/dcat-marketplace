<?php

namespace Sparkinzy\DcatExtensionClient;

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
