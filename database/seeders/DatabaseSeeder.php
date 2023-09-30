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
use App\Models\TipoEmpleado;
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

    }
}
