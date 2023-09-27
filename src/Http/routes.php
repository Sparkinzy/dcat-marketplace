<?php

use Illuminate\Support\Facades\Route;
use Sparkinzy\DcatMarketPlace\Http\Controllers;

$setting = admin_setting_array('sparkinzy:dcat-extension-client');
$path = $setting['path'] ?? 'dcat-marketplace';
Route::get($path, Controllers\DcatMarketPlaceController::class.'@index');
