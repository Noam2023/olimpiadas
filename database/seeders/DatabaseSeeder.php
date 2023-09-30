<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Emergencia;
use App\Models\Empleado;
use App\Models\Habitacion;
use App\Models\Llamado;
use App\Models\LlamadoEmpleado;
use App\Models\Paciente;
use App\Models\PacienteEnfermero;
use App\Models\Tipo_empleado;
use App\Models\TipoHabitacion;
use App\Models\Usuario;
use App\Models\Zona;
use App\Models\ZonaEmpleado;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $zona = new Zona();
        $zona->nombre_zona = "Zona A";
        $zona->save();

        $zona = new Zona();
        $zona->nombre_zona = "Zona B";
        $zona->save();

        $zona = new Zona();
        $zona->nombre_zona = "Zona C";
        $zona->save();

        $zona = new Zona();
        $zona->nombre_zona = "Zona D";
        $zona->save();

        $tipo_habitacion = new TipoHabitacion();
        $tipo_habitacion->tipo_habitacion = "Consultas";
        $tipo_habitacion->save();  

        $tipo_habitacion = new TipoHabitacion();
        $tipo_habitacion->tipo_habitacion = "Baño";
        $tipo_habitacion->save();  

        $tipo_habitacion = new TipoHabitacion();
        $tipo_habitacion->tipo_habitacion = "Recepcion";
        $tipo_habitacion->save();  
        
        $tipo_habitacion = new TipoHabitacion();
        $tipo_habitacion->tipo_habitacion = "Descanso";
        $tipo_habitacion->save();
        
        $habitacion = new Habitacion();
        $habitacion->id = 100;
        $habitacion->zona_id = 1;
        $habitacion->tipo_habitacion_id = 1;
        $habitacion->save();
        
        $habitacion = new Habitacion();
        $habitacion->id = 101;
        $habitacion->zona_id = 3;
        $habitacion->tipo_habitacion_id = 1;  
        $habitacion->save();

        $habitacion = new Habitacion();
        $habitacion->id = 102;
        $habitacion->zona_id = 1;
        $habitacion->tipo_habitacion_id = 2;  
        $habitacion->save();

        $habitacion = new Habitacion();
        $habitacion->id = 103;
        $habitacion->zona_id = 2;
        $habitacion->tipo_habitacion_id = 2;
        $habitacion->save();
        
        $llamado = new Llamado();
        $llamado->habitacion_id = 103;
        $llamado->zona_id = 1;
        $llamado->es_atendido = false;
        $llamado->es_urgente = false;
        $llamado->save();

        $llamado = new Llamado();
        $llamado->habitacion_id = 100;
        $llamado->zona_id = 1;
        $llamado->es_atendido = true;
        $llamado->es_urgente = false;
        $llamado->save();

        $llamado = new Llamado();
        $llamado->habitacion_id = 103;
        $llamado->zona_id = 2;
        $llamado->es_atendido = false;
        $llamado->es_urgente = true;
        $llamado->save();

        $llamado = new Llamado();
        $llamado->habitacion_id = 103;
        $llamado->zona_id = 3;
        $llamado->es_atendido = false;
        $llamado->es_urgente = true;
        $llamado->save();

        $emergencia = new Emergencia();
        $emergencia->id = 1;
        $emergencia->cantidad_empleados_involucrados =  0;
        $emergencia->cantidad_empleados_requeridos = 5;
        $emergencia->save();

        $emergencia = new Emergencia();
        $emergencia->id = 2;
        $emergencia->cantidad_empleados_involucrados = 0;
        $emergencia->cantidad_empleados_requeridos = 5;
        $emergencia->save();
        
        $emergencia = new Emergencia();
        $emergencia->id = 3;
        $emergencia->cantidad_empleados_involucrados = 0;
        $emergencia->cantidad_empleados_requeridos = 5;
        $emergencia->save();

        $emergencia = new Emergencia();
        $emergencia->id = 4;
        $emergencia->cantidad_empleados_involucrados = 0;
        $emergencia->cantidad_empleados_requeridos = 5;
        $emergencia->save();

        $tipo = new Tipo_empleado();
        $tipo->cargo = "Enfermero";
        $tipo->save();
  
        $tipo = new Tipo_empleado();
        $tipo->cargo = "Encargado";
        $tipo->save();

        $tipo = new Tipo_empleado();
        $tipo->cargo = "Medico";
        $tipo->save();

        $empleado = new Empleado();
        $empleado->nombre_empleado = "Adriel";
        $empleado->apellido_empleado = "Ivanoff";
        $empleado->telefono = "00000000";
        $empleado->DNI = "00000000";
        $empleado->email = "adriel.ivanoff@gmail.com";
        $empleado->tipo_id = 1;
        $empleado->save();

        $empleado = new Empleado();
        $empleado->nombre_empleado = "Federico";
        $empleado->apellido_empleado = "Albornoz";
        $empleado->telefono = "1111111";
        $empleado->DNI = "1111111";
        $empleado->email = "federico.albornoz@gmail.com";
        $empleado->tipo_id = 2;
        $empleado->save();

        $empleado = new Empleado();
        $empleado->nombre_empleado = "Noam";
        $empleado->apellido_empleado = "Llanez";
        $empleado->telefono = "2222222";
        $empleado->DNI = "2222222";
        $empleado->email = "noam.llanez@gmail.com";
        $empleado->tipo_id = 3;
        $empleado->save();

        $empleado = new Empleado();
        $empleado->nombre_empleado = "Ailen";
        $empleado->apellido_empleado = "Iglesias";
        $empleado->telefono = "3333333";
        $empleado->DNI = "3333333";
        $empleado->email = "ailen.glesias@gmail.com";
        $empleado->tipo_id = 1;
        $empleado->save();

        $usuario = new Usuario();
        $usuario->empleado_id = 1;
        $usuario->contrasena = "2222";
        $usuario->es_admin = true;
        $usuario->save();

        
        $usuario = new Usuario();
        $usuario->empleado_id = 2;
        $usuario->contrasena = "4567";
        $usuario->es_admin = true;
        $usuario->save();

        
        $usuario = new Usuario();
        $usuario->empleado_id = 3;
        $usuario->contrasena = "1010";
        $usuario->es_admin = true;
        $usuario->save();

        
        $usuario = new Usuario();
        $usuario->empleado_id = 4;
        $usuario->contrasena = "9999";
        $usuario->es_admin = true;
        $usuario->save();


    }
}
