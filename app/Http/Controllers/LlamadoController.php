<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Llamado;

class LlamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Llamado::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'es_atendido' => 'required',
            'es_urgente' => 'required',
            'origen_id' => 'required',
            'FechaHora_llamada' => 'required',
        ]);

        $llamado = new Llamado;
        $llamado->es_atendido = $request->es_atendido;
        $llamado->es_urgente = $request->es_urgente;
        $llamado->origen_id = $request->origen_id;
        $llamado->FechaHora_llamada = $request->FechaHora_llamada;
       
        $llamado->save();

        return $llamado;
    }

    /**
     * Display the specified resource.
     */
    public function show(Llamado $llamado)
    {
        return $llamado;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Llamado $llamado)
    {
        $request->validate([
            'es_atendido' => 'required',
            'es_urgente' => 'required',
            'origen_id' => 'required',
            'FechaHora_llamada' => 'required',
        ]);

        $llamado->es_atendido = $request->es_atendido;
        $llamado->es_urgente = $request->es_urgente;
        $llamado->origen_id = $request->origen_id;
        $llamado->FechaHora_llamada = $request->FechaHora_llamada;
       
        $llamado->update();

        return $llamado;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $llamado = Llamado::find($id);
        
        if(is_null($llamado)) {
            return response()->json('No se pudo realizar la operacion', 404);
        }
        
        $llamado->delete();
        return 'Registro borrado';
    }                                                                       
}
