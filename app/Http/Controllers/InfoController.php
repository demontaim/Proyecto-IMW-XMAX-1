<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    //Mostrar la información de nuestra página
    public function index(){
        return view('info.index');
    }
}
