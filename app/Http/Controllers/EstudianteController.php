<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{

    public function index()
    {
        $estudiantes = Estudiante::with('clases')->get();
        return view('estudiantes.index', compact('estudiantes'));
    }


    public function create()
    {
        $clases = Clase::all();
        return view('estudiantes.create',compact('clases'));
    }


    public function store(Request $request)
    {
        Estudiante::create($request->all());
        return redirect()->route('dashboard');
    }


    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        $clases = Clase::all();
        return view('estudiantes.edit',compact('estudiante','clases'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.edit');
    }


    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }
}
