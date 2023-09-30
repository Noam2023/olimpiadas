<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Habitacion;

class HabitacionoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Habitacion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           // 'id' => 'required',
            'zona_id' => 'required',
            'tipo_habitacion_id' => 'required',
            
        ]);

        $habitacion = new Habitacion;
        $habitacion->zona_id = $request->zona_id;
        $habitacion->tipo_habitacion_id = $request->tipo_habitacion_id;
        $habitacion->id = $request->id;
        $habitacion->save();

        return $habitacion;
    }

    /**
     * Display the specified resource.
     */
    public function show($id, $zona_id)
    {
        $habitacion = Habitacion::where('id', $id)->where('zona_id', $zona_id)->first();

        if ($habitacion) {
            return response()->json($habitacion);
        } else {
            return response()->json([
                'message' => 'No se encontró la habitación.'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, $zona_id, $tipo_habitacion_id)
    {
        
        $habitacion = Habitacion::where('id', $id)->where('zona_id', $zona_id)->first();
        
        if (!$habitacion) {
            return response()->json('Registro no encontrado', 404);
        }
        
        $habitacion->tipo_habitacion_id = $tipo_habitacion_id;
        
        $habitacion->save();
        return json_encode($habitacion);        
      
        
        return $habitacion;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, $zona_id)
    {
      
        $habitacion = Habitacion::where('id', $id)
            ->where('zona_id', $zona_id)
            ->delete();
    
        if (is_null($habitacion)) {
            return response()->json('No se encontró ningún registro con el id y zona_id especificados', 404);
        }
    
        return 'Registro borrado';
        
    }
    
    

}
