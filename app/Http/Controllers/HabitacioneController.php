<?php

namespace App\Http\Controllers;

use App\Models\Habitacione;
use App\Models\Categoria;
use Illuminate\Http\Request;

class HabitacioneController extends Controller
{
    //Lista de habitaciones
    public function index()
    {
        $habitaciones = Habitacione::paginate();

        return view('habitacione.index', compact('habitaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $habitaciones->perPage());
    }

    //Crear una habitación nueva
    public function create()
    {
        $habitacione = new Habitacione();

        //Consultamos las categorías por el nombre y el ID.
        $categorias = Categoria::pluck('nombre','id');

        return view('habitacione.create', compact('habitacione', 'categorias'));
    }

    //Almacenar la habitación creada
    public function store(Request $request)
    {
        request()->validate(Habitacione::$rules);

        $habitacione = Habitacione::create($request->all());

        return redirect()->route('habitaciones.index')
            ->with('success', 'Habitación creada correctamente.');
    }

    //Mostrar los datos de una habitación
    public function show($id)
    {
        $habitacione = Habitacione::find($id);

        return view('habitacione.show', compact('habitacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habitacione = Habitacione::find($id);

        //Consultamos las categorías por el nombre y el ID.
        $categorias = Categoria::pluck('nombre','id');

        return view('habitacione.edit', compact('habitacione', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Habitacione $habitacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitacione $habitacione)
    {
        request()->validate(Habitacione::$rules);

        $habitacione->update($request->all());

        return redirect()->route('habitaciones.index')
            ->with('success', 'Habitación actualizada correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $habitacione = Habitacione::find($id)->delete();

        return redirect()->route('habitaciones.index')
            ->with('success', 'Habitación borrada correctamente.');
    }
}
