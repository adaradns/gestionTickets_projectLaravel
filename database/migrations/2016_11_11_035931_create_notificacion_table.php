<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('notificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('leido');
            $table->timestamps();
        });

        //many to many notificaciones_usuario
        Schema::create('notificaciones_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario_destinatario')->unsigned();
            $table->integer('id_historial')->unsigned();

            //Foreings key
            $table->foreign('id_usuario_destinatario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            //Foreings key
            $table->foreign('id_historial')
                ->references('id')
                ->on('historial')
                ->onDelete('cascade');

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
        //
    }
}
