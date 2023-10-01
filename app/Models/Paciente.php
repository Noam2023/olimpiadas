<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo

    protected $fillable = [
        'habitacion_id',	
        'nombre_paciente',	
        'apellido_paciente',	
        'telefono_contacto',	
        'telefono_paciente',	
        'tipo_sangre',	
        'padecimientos_previos',
        'alergias',	
        'DNI',	
        'razon_ingreso',
    ];

    public function paciente_habitacion() {
        return $this->belongsTo(Habitacion::class);
    }

    public function paciente_enfermero() {
        return $this->belongsToMany(Tag::class, 'Empleado');
    }
}
