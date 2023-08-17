<?php

use Illuminate\Support\Facades\Route;
use Sparkinzy\DcatExtensionClient\Http\Controllers;

$setting = admin_setting_array('sparkinzy:dcat-extension-client');
$path = $setting['path'] ?? 'dcat-extension-client';
Route::get($path, Controllers\DcatExtensionClientController::class.'@index');
