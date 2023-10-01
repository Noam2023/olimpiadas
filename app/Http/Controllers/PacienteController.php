<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Paciente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'habitacion_id' => 'required',
            'nombre_paciente' => 'required',
            'apellido_paciente' => 'required',
            'telefono_contacto' => 'required',
            'telefono_paciente' => 'required',
            'tipo_sangre' => 'required',
            'padecimientos_previos' => 'required',
            'alergias' => 'required',
            'DNI' => 'required',
            'razon_ingreso' => 'required',
        ]);

        $paciente = new Paciente;
        $paciente->habitacion_id = $request->habitacion_id;
        $paciente->nombre_paciente = $request->nombre_paciente;
        $paciente->apellido_paciente = $request->apellido_paciente;
        $paciente->telefono_contacto = $request->telefono_contacto;
        $paciente->telefono_paciente = $request->telefono_paciente;
        $paciente->tipo_sangre = $request->tipo_sangre;
        $paciente->padecimientos_previos = $request->padecimientos_previos;
        $paciente->alergias = $request->alergias;
        $paciente->DNI = $request->DNI;
        $paciente->razon_ingreso = $request->razon_ingreso;
        
        $paciente->save();

        return $paciente;
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        return $paciente;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'habitacion_id' => 'required',
            'nombre_paciente' => 'required',
            'apellido_paciente' => 'required',
            'telefono_contacto' => 'required',
            'telefono_paciente' => 'required',
            'tipo_sangre' => 'required',
            'padecimientos_previos' => 'required',
            'alergias' => 'required',
            'DNI' => 'required',
            'razon_ingreso' => 'required',
        ]);

        $paciente->habitacion_id = $request->habitacion_id;
        $paciente->nombre_paciente = $request->nombre_paciente;
        $paciente->apellido_paciente = $request->apellido_paciente;
        $paciente->telefono_contacto = $request->telefono_contacto;
        $paciente->telefono_paciente = $request->telefono_paciente;
        $paciente->tipo_sangre = $request->tipo_sangre;
        $paciente->padecimientos_previos = $request->padecimientos_previos;
        $paciente->alergias = $request->alergias;
        $paciente->DNI = $request->DNI;
        $paciente->razon_ingreso = $request->razon_ingreso;
        
        $paciente->update();

        return $paciente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $paciente = Paciente::find($id);
        
        if(is_null($paciente)) {
            return response()->json('No se pudo realizar la operacion', 404);
        }
        
        $paciente->delete();
        return 'Registro eliminado';
    }
}
