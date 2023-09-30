<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_empleado extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo
    protected $filable = [
        'Cargo',
    ];

    public function cargos_de_empleados() {
        return $this->hasMany(Empleados::class);
    }
}
