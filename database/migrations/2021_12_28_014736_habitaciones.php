<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Habitaciones extends Migration
{
    //Creación de la tabla Habitaciones
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            //Incluímos la cláve foránea
            $table->bigInteger('categoria_id')->unsigned();

            $table->string('nombre');
            $table->timestamps();

            //Referencia a la cláve foránea
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    //Eliminación de la tabla Habitaciones
    public function down()
    {
        //
    }
}
