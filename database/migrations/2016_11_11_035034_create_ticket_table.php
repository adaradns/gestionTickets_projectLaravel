<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_responsable')->unsigned();
            $table->integer('id_problema')->unsigned();
            $table->integer('id_sla')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->string('descripcion');
            $table->string('nombre_archivo');
            $table->binary('archivo'); 
            $table->date('fecha_creacion');
            $table->date('fecha_vencimiento');
            $table->date('fecha_cierre');
            $table->timestamps();
            

            //Foreings key
            $table->foreign('id_cliente')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('id_responsable')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('id_problema')
                ->references('id')
                ->on('tipo_problema')
                ->onDelete('cascade');

            $table->foreign('id_sla')
                ->references('id')
                ->on('sla')
                ->onDelete('cascade');

            $table->foreign('id_estado')
                ->references('id')
                ->on('estado_ticket')
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
