<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Empleado::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_empleado' => 'required',
            'apellido_empleado' => 'required',
            'telefono' => 'required',
            'DNI' => 'required',
            'email' => 'required',
            'tipo_id' => 'required',
        ]);

        $empleado = new Empleado;
        $empleado->nombre_empleado = $request->nombre_empleado;
        $empleado->apellido_empleado = $request->apellido_empleado;
        $empleado->telefono = $request->telefono;
        $empleado->DNI = $request->DNI;
        $empleado->email = $request->email;
        $empleado->tipo_id = $request->tipo_id;

        $empleado->save();

        return $empleado;
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        return $empleado;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_empleado' => 'required',
            'apellido_empleado' => 'required',
            'telefono' => 'required',
            'DNI' => 'required',
            'email' => 'required',
            'tipo_id' => 'required',
        ]);

        $empleado->nombre_empleado = $request->nombre_empleado;
        $empleado->apellido_empleado = $request->apellido_empleado;
        $empleado->telefono = $request->telefono;
        $empleado->DNI = $request->DNI;
        $empleado->email = $request->email;
        $empleado->tipo_id = $request->tipo_id;
        $empleado->update();

        return $empleado;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        
        if(is_null($empleado)) {
            return response()->json('No se pudo realizar la operacion', 404);
        }
        
        $empleado->delete();
        return 'Empleado eliminado';
    }
}
