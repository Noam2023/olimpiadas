<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Emergencia;

class EmergenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Emergencia::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'cantidad_empleados_involucrados' => 'required',
            'cantidad_empleados_requeridos' => 'required',
        ]);

        $emergencia = new Emergencia;
        $emergencia->id = $request->id;
        $emergencia->cantidad_empleados_involucrados = $request->cantidad_empleados_involucrados;
        $emergencia->cantidad_empleados_requeridos = $request->cantidad_empleados_requeridos;
        
        $emergencia->save();

        return $emergencia;
    }

    /**
     * Display the specified resource.
     */
    public function show(Emergencia $emergencia)
    {
        return $emergencia;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emergencia $emergencia)
    {
        $request->validate([
            'cantidad_empleados_involucrados' => 'required',
        ]);

        //$emergencia->id = $request->id;
        $emergencia->cantidad_empleados_involucrados = $request->cantidad_empleados_involucrados;
        //$emergencia->cantidad_empleados_requeridos = $request->cantidad_empleados_requeridos;
        $emergencia->update();

        return $emergencia;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $emergencia = emergencia::find($id);
        
        if(is_null($emergencia)) {
            return response()->json('No se pudo realizar la operacion', 404);
        }
        
        $emergencia->delete();
        return[];
    }
}
