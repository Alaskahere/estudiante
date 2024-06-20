<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::with('estudiantes')->get();
        return view('clases.index', compact('clases'));
    }


    public function create()
    {
        $estudiantes = Estudiante::all();
        return view('clases.create',compact('estudiantes'));
    }


    public function store(Request $request)
    {
        Clase::create($request->all());
        return redirect()->route('clases.index');
    }


    public function show(Clase $clase)
    {
        return view('clases.show', compact('clase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clase $clase)
    {
        $estudiantes = Estudiante::all();
        return view('clases.edit',compact('clase','estudiantes'));
    }

    public function update(Request $request, Clase $clase)
    {
        $clase->update($request->all());
        return redirect()->route('clases.edit');
    }


    public function destroy(Clase $clase)
    {
        $clase->delete();
        return redirect()->route('clases.index');
    }
}
