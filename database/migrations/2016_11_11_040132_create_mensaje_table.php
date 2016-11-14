<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ticket')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->date('fecha_creacion');
            $table->string('descripcion');
            $table->timestamps();


            //Foreings Key
            $table->foreign('id_ticket')
                ->references('id')
                ->on('ticket')
                ->onDelete('cascade');

            $table->foreign('id_usuario')
                ->references('id')
                ->on('users')
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
        //
    }
}
