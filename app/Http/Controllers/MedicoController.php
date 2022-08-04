<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico = Medico::all();
        return view('medico.index', compact('medico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medico = new Medico;
        $medico->cedula_medico = $request->cedula_medico;
        $medico->nombre_medico = $request->nombre_medico;
        $medico->apellido_medico = $request->apellido_medico;
        $medico->correo_medico = $request->correo_medico;
        $medico->celular_medico = $request->celular_medico;
        $medico->direccion_medico = $request->direccion_medico;
        $medico->especialidad_medico = $request->especialidad_medico;


        $medico->save();

        return redirect()->route('medicos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = Medico::find($id);
        return view('medico.edit', compact('medico'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medico = Medico::find($id);
        $medico->cedula_medico = $request->cedula_medico;
        $medico->nombre_medico = $request->nombre_medico;
        $medico->apellido_medico = $request->apellido_medico;
        $medico->correo_medico = $request->correo_medico;
        $medico->celular_medico = $request->celular_medico;
        $medico->direccion_medico = $request->direccion_medico;
        $medico->especialidad_medico = $request->especialidad_medico;


        $medico->save();

        return redirect()->route('medicos.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medico::destroy($id);
        return redirect()->route('medicos.index');

    }
}
