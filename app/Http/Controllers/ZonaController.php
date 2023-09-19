<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Zona;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        return Zona::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $zona = new Zona;
        $zona->nombre_zona = $request->nombre_zona;
        $zona->save();

        return $zona;
    }

    /**
     * Display the specified resource.
     */
    public function show(Zona $zona)
    {
        return $zona;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
