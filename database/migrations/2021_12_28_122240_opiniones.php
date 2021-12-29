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

            //$table->integer('cliente_id')->unsigned();

            $table->timestamps();

            //$table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
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
