<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente_Enfermero;

class PacienteEnfermeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Paciente_Enfermero::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required',
            'empleado_id' => 'required',            
        ]);
    
        $paciente_empleado = new Paciente_Enfermero;
        $paciente_empleado->paciente_id = $request->paciente_id;
        $paciente_empleado->empleado_id = $request->empleado_id;
        $paciente_empleado->save();
            
        return $paciente_empleado;
    }

    /**
     * Display the specified resource.
     */
    public function show($paciente_id, $empleado_id)
    {
        $paciente_empleado = Paciente_Enfermero::where('paciente_id', $paciente_id)->where('empleado_id', $empleado_id)->first();

        if ($paciente_empleado) {
            return response()->json($paciente_empleado);
        } else {
            return response()->json([
                'message' => 'No se encontró el registro.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($paciente_id, $empleado_id)
    {
        $paciente_empleado = Paciente_Enfermero::where('paciente_id', $paciente_id)
            ->where('empleado_id', $empleado_id)
            ->delete();
    
        if (is_null($paciente_empleado)) {
            return response()->json('No se encontró ningún registro con el paciente_id y paciente_id especificados', 404);
        }
    
        return 'Registro borrado';
    }
}
