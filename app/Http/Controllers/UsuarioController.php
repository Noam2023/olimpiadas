<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'empleado_id' => 'required',
            'contrasena' => 'required',
            'es_admin' => 'required',  
            
        ]);


        $usuario = new Usuario;
        $usuario->contrasena = $request->contrasena;
        $usuario->es_admin = $request->es_admin;
        $usuario->empleado_id = $request->empleado_id;
        $usuario->save();

        return $usuario;
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'empleado_id' => 'required',
            'contrasena' => 'required',
            'es_admin' => 'required',  
            
        ]);

        $usuario->contrasena = $request->contrasena;
        $usuario->es_admin = $request->es_admin;
        $usuario->empleado_id = $request->empleado_id;
        $usuario->update();

        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        
        if(is_null($usuario)) {
            return response()->json('No se pudo realizar la operacion', 404);
        }
        
        $usuario->delete();
        return "Usuario borrado";
    }
}
