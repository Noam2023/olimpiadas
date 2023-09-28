<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmergenciaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HabitacionoController;
use App\Http\Controllers\LlamadoController;
use App\Http\Controllers\LlamadoEmpleadoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PacienteEnfermeroController;
use App\Http\Controllers\PuntoOrigenLlamadaController;
use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\TipoHabitacionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\ZonaEmpleadoController;


\Event::listen('Illuminate\Database\Events\QueryExecuted', function($query) {
    Log::debug($query->sql);
    Log::debug($query->bindings);
    Log::debug($query->time);
});

route::apiResource('emergencias', EmergenciaController::class); //h
route::apiResource('empleados', EmpleadoController::class); //h
/*
Route::put('/prueba/{id}', function($id){
    return $id;
});
*/
Route::put('habitacions/{id}/{zona_id}/{tipo_habitacion_id}', 'App\Http\Controllers\HabitacionoController@update');
Route::apiResource('habitacions', HabitacionoController::class); //h
Route::get('habitacions/{id}/{zona_id}', 'App\Http\Controllers\HabitacionoController@show'); //h


route::apiResource('tipo_habitacions', TipoHabitacionController::class); //h
route::apiResource('llamados', LlamadoController::class);
route::apiResource('llamado__empleados', LlamadoEmpleadoController::class);
route::apiResource('pacientes', PacienteController::class);
route::apiResource('paciente_enfermeros', PacienteEnfermeroController::class);
route::apiResource('punto_origen_llamadas', PuntoOrigenLlamadaController::class);
route::apiResource('tipo_empleados', TipoEmpleadoController::class);
route::apiResource('usuarios', UsuarioController::class);
route::apiResource('zonas', ZonaController::class); //h
route::apiResource('zona__empleados', ZonaEmpleadoController::class);


