<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zona_Empleado;


class ZonaEmpleadoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Zona_Empleado::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'zona_id' => 'required',
            'empleado_id' => 'required',            
        ]);
    
        $zona_empleado = new Zona_Empleado;
        $zona_empleado->zona_id = $request->zona_id;
        $zona_empleado->empleado_id = $request->empleado_id;
        $zona_empleado->save();
            
        return $zona_empleado;
    }

    /**
     * Display the specified resource.
     */
    public function show($zona_id, $empleado_id)
    {
        $zona_empleado = Zona_Empleado::where('zona_id', $zona_id)->where('empleado_id', $empleado_id)->first();

        if ($zona_empleado) {
            return response()->json($zona_empleado);
        } else {
            return response()->json([
                'message' => 'No se encontró el registro.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($zona_id, $empleado_id)
    {
        $zona_empleado = Zona_Empleado::where('zona_id', $zona_id)
            ->where('empleado_id', $empleado_id)
            ->delete();
    
        if (is_null($zona_empleado)) {
            return response()->json('No se encontró ningún registro con la zona y empleado especificados', 404);
        }
    
        return 'Registro borrado';
    }
}
