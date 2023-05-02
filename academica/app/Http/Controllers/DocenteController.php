<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * from docentes
        return Docente::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert into docentes values...
        Docente::create($request->all());
        return response()->json(['msg'=>'ok']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Docente $docente)
    {
        $docente = Docente::find($request['idDocente']);

        // Mostrar los valores actuales de los campos
        $codigo = $docente->codigo;
        $nombre = $docente->nombre;
            
        // Retornar una respuesta JSON con los valores actuales de los campos
        return response()->json([
            'codigo_actual'=>$codigo,
            'nombre_actual'=>$nombre,
            'msg'=>'ok'
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)
    {
        //update docentes set ... where id=?
        //update docentes set ... where idDocente=?
        $docente::where('idDocente', $request['idDocente'])->update([
            'codigo' =>$request['codigo'],
            'nombre' =>$request['nombre'],

        ]);
        return response()->json(['msg'=>'ok'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Docente $docente)
    {
        $docente::where('idDocente', $request['idDocente'])->delete();
        return response()->json(['msg'=>'ok'], 200);
    }
}
