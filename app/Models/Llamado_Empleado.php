<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llamado_Empleado extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo

    protected $fillable = [
        'llamado_id',
        'empleado_id',
        // 'hora_atendido',
        // 'tiempo_respuesta',
    ];



    
}
