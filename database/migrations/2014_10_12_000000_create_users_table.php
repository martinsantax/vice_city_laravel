<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void background: url(../image/checkbox-uncheck.png);
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image', 150)->default('avatar.jpg');///perfil
            $table->integer('telefono')->nullable();//perfil
            $table->integer('dni')->nullable();//perfil
            $table->string('direccion')->nullable();//perfil
            $table->integer('codigo_postal')->nullable(); //perfil
            $table->string('provincia')->nullable();
            $table->string('ciudad')->nullable();//perfil
            $table->date('fecha_de_nacimiento')->nullable();//perfil
            $table->boolean('admin')->default(false);
            $table->string('password');
            $table->rememberToken();
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
