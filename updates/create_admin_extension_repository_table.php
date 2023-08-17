<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminExtensionRepositoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_extension_repositories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable()->comment('图标');
            $table->string('title')->default('')->comment('名称');
            $table->string('detail')->default('')->comment('描述');
            $table->string('home_page')->default('')->comment('主页');
            $table->string('zip_url')->default('')->comment('发行版地址');
            $table->string('version')->default('')->comment('版本号');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_extension_repositories');
    }
}
