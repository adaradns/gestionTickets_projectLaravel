<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->increments('id');
            $table->integer('id_tipo')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('nombre_usuario');
            $table->boolean('habilitado');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('fecha_creacion');
            $table->rememberToken();
            $table->timestamps();
            
            //Foreings key
            $table->foreign('id_tipo')
                ->references('id')
                ->on('tipo_usuario')
                ->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('users');
    }
}
