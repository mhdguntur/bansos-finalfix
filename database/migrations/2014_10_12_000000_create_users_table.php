<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 255)->nullable();
            $table->string('nama', 255)->nullable();
            $table->string('nik', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('roles', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('url_ktp', 255)->nullable();
            $table->string('kelurahan', 255)->nullable();
            $table->string('sektor_usaha', 255)->nullable();
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
        Schema::dropIfExists('users');
    }
}
