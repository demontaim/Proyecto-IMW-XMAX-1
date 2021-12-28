<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    //Mostrar la información de nuestra ubicación
    public function index(){
        return view('ubicacion.index');
    }
}
