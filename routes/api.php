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

route::apiResource('zonas', ZonaController::class);