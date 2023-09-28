<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Punto_origen_llamada;

class PuntoOrigenLlamadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Punto_origen_llamada::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'origen' => 'required',
            'habitacion_id' => 'required',
        ]);

        $punto_origen = new Punto_origen_llamada;
        $punto_origen->origen = $request->origen;
        $punto_origen->habitacion_id = $request->habitacion_id;  
        $punto_origen->save();

        return $punto_origen;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $punto_origen;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'origen' => 'required',
            'habitacion_id' => 'required',
        ]);

        $punto_origen = Punto_origen_llamada::find($id);
        $punto_origen->origen = $request->origen;
        $punto_origen->habitacion_id = $request->habitacion_id;  
       
        $punto_origen->save();

        return $punto_origen;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $punto_origen = Punto_origen_llamada::find($id);
        
        if(is_null($punto_origen)) {
            return response()->json('No se pudo realizar la operacion', 404);
        }
        
        $punto_origen->delete();
        return 'Registro borrado';
    }
}
