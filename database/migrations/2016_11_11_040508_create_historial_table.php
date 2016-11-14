<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('historial', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ticket')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->string('motivo');
            $table->date('fecha');
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
