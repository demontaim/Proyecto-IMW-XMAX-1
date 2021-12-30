<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Opiniones extends Migration
{
    //Creación de la tabla opiniones
    public function up()
    {
        Schema::create('opiniones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('opinion');
            $table->bigInteger('cliente_id')->unsigned()->nullable();
            $table->bigInteger('habitacion_id')->unsigned()->nullable();
            
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');

            $table->foreign('habitacion_id')->references('id')->on('habitaciones')->onDelete('cascade');

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
