<?php

namespace Sparkinzy\DcatMarketPlace\Exceptions;

use Dcat\Admin\Admin;
use Exception;

class DcatExtensionInstallException extends Exception
{
    public function render()
    {
        return Admin::json()
            ->error($this->getMessage())
            ->statusCode(500);
    }
}
