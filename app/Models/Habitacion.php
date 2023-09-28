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

    
    
}



