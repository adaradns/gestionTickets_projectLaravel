<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ticket')->unsigned();
            $table->boolean('pregunta_1');
            $table->integer('pregunta_2');
            $table->integer('pregunta_3');
            $table->timestamps();


            //Foreings key
            $table->foreign('id_ticket')
                ->references('id')
                ->on('ticket')
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
