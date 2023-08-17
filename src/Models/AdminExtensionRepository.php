<?php

namespace Sparkinzy\DcatExtensionClient\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class AdminExtensionRepository extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'admin_extension_repositories';
}
