<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergencia extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo
    protected $fillable = [
        'id',
        'cantidad_empleados_involucrados',
        'cantidad_empleados_requeridos',
    ];

    public function llamado()
    {
        return $this->belongsTo(Llamado::class);
    }
}
