<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Llamado_Empleado;
use App\Models\Llamado;
use Carbon\Carbon;


class LlamadoEmpleadoController extends Controller
{
 
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        return Llamado_Empleado::all();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            $request->validate([
                'llamado_id' => 'required',
                'empleado_id' => 'required',            
            ]);
        
            $llamado_empleado = new Llamado_Empleado;
            $llamado_empleado->llamado_id = $request->llamado_id;
            $llamado_empleado->empleado_id = $request->empleado_id;
            
            $llamado = Llamado::findOrFail($request->llamado_id);
            $hora_inicio = Carbon::parse($llamado->FechaHora_llamada);
        
           
            $llamado_empleado->hora_atendido = now();

 // Esto obtiene la fecha y hora actual
            
         
            $tiempo_respuesta = $hora_inicio->diffInSeconds($llamado_empleado->hora_atendido);
            $llamado_empleado->tiempo_respuesta = $tiempo_respuesta;
        
            $llamado_empleado->save();
            
            return $llamado_empleado;
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show($llamado_id, $empleado_id)
    {
        $llamado_empleado = Llamado_Empleado::where('llamado_id', $llamado_id)->where('empleado_id', $empleado_id)->first();

        if ($llamado_empleado) {
            return response()->json($llamado_empleado);
        } else {
            return response()->json([
                'message' => 'No se encontró el registro.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($llamado_id, $empleado_id)
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
