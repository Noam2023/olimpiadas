<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo
    protected $fillable = [
        'nombre_empleado',
        'apellido_empleado',
        'telefono',
        'DNI',
        'email',
    ]; 
}
