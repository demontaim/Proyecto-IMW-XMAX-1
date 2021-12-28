<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categorias extends Migration
{
    //Creación de la tabla Categorías
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });
    }

    //Eliminación de la tabla Categorías
    public function down()
    {
        //
    }
}
