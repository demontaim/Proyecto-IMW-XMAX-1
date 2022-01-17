<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class InfoController extends Controller
{
    //Mostrar la información de nuestra página
    public function index()
    {
        return view('info.index');
    }

    public function store(request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('cliente@example.com')->send($correo);

        return redirect()->route('info.index')->with('info', 'Se ha enviado el mensaje. Muchas Gracias :)'); 
    }
}
