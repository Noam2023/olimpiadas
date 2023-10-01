<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona_Empleado extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo

    protected $fillable = [
        'zona_id',
        'empleado_id',
    ];
}
