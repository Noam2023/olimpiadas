<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo

    protected $fillable = [
        'nombre_usuario',
        'contrasena',
        'es_admin',
        'legajo'
    ];

    public function usuario_empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
