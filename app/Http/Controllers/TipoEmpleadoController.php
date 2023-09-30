<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoEmpleadoController extends Controller
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
            'cargo' => 'required',
        ]);

        $tipo = new Tipo_empleado;
        $tipo->cargo = $request->cargo;
        $tipo->save();

        return $tipo;
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo_empleado $tipo)
    {
        return $tipo;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cargo' => 'required',
        ]);

        $tipo->cargo = $request->cargo;
        $tipo->save();

        return $tipo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipo = Tipo_empleado::find($id);
        
        if(is_null($tipo)) {
            return response()->json('No se pudo realizar la operacion', 404);
        }
        
        $tipo->delete();
        return "Registro borrado";
    }
}
