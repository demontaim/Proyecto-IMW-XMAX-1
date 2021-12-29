<?php

namespace App\Http\Controllers;

use App\Models\Opinione;
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
        $opiniones = Opinione::paginate();

        return view('opinione.index', compact('opiniones'))
            ->with('i', (request()->input('page', 1) - 1) * $opiniones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opinione = new Opinione();
        return view('opinione.create', compact('opinione'));
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
