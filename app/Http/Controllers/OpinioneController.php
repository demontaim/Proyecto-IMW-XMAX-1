<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Opinione;
use App\Models\Habitacione;
use Illuminate\Http\Request;

/**
 * Class OpinioneController
 * @package App\Http\Controllers
 */
class OpinioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $opiniones = Opinione::paginate();

        $opiniones = Opinione::with('clientes')->paginate();
        
        $nombre = Cliente::get('nombre');

        return view('opinione.index', compact('opiniones', 'nombre'))
            ->with('i', (request()->input('page', 1) - 1) * $opiniones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Consultamos las categorías por el nombre y el ID.
        $habitaciones = Habitacione::pluck('nombre','id');

        //Consultamos las categorías por el nombre y el ID.
        $clientes = Cliente::pluck('nombre','id');

        $opinione = new Opinione();
        return view('opinione.create', compact('opinione', 'habitaciones', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Opinione::$rules);

        $opinione = Opinione::create($request->all());

        return redirect()->route('opiniones.index')
            ->with('success', 'Opinión creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opinione = Opinione::find($id);

        return view('opinione.show', compact('opinione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opinione = Opinione::find($id);

        return view('opinione.edit', compact('opinione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Opinione $opinione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opinione $opinione)
    {
        request()->validate(Opinione::$rules);

        $opinione->update($request->all());

        return redirect()->route('opiniones.index')
            ->with('success', 'Opinión actualizada correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $opinione = Opinione::find($id)->delete();

        return redirect()->route('opiniones.index')
            ->with('success', 'Opinión borrada correctamente.');
    }
}
