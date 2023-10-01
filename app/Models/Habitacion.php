<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'zona_id',
        'tipo_habitacion_id',
    ];
    public $timestamps = false; 
    public $incrementing = false; 

    public function zona() {
        return $this->belongsTo(Zona::class);
    }

    public function tipo() {
        return $this->belongsTo(TipoHabitacion::class);
    }

    public function habitacion_origenes() {
        return $this->hasMany(Punto_origen_llamada::class);
    }

    public function llamados() {
        return $this->hasMany(Llamado::class);
    }

    public function habitacion_pacientes() {
        return $this->hasMany(Paciente::class);
    }
    
    
}



