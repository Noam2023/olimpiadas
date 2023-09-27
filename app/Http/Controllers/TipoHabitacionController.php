<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoHabitacion;

class TipoHabitacionController extends Controller
{
    public function index() 
    {
        return TipoHabitacion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo_habitacion' => 'required',
        ]);

        $tipo_habitacion = new TipoHabitacion;
        $tipo_habitacion->tipo_habitacion = $request->tipo_habitacion;
        $tipo_habitacion->save();

        return $tipo_habitacion;
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoHabitacion $tipo_habitacion)
    {
        return $tipo_habitacion;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoHabitacion $tipo_habitacion)
    {
        $request->validate([
            'tipo_habitacion' => 'required',
        ]);

        $tipo_habitacion->tipo_habitacion = $request->tipo_habitacion;
        $tipo_habitacion->update();

        return $tipo_habitacion;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipo_habitacion = TipoHabitacion::find($id);
        
        if(is_null($tipo_habitacion)) {
            return response()->json('No se pudo realizar la operación', 404);
        }
        
        $tipo_habitacion->delete();
        return [];
    }
}
