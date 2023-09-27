<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo
    protected $fillable = [
        'tipo_habitacion',
        
    ];
}
