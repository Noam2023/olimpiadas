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
        'tipo_id',
    ]; 

    public function empleado_usuario()
    {
        return $this->hasOne(Usuario::class);
    }

    public function habitacion_origenes() {
        return $this->belongsTo(Tipo_empleado::class);
    }

    public function empleado_responde() {
        return $this->hasMany(Llamado_Empleado::class);
    }
}
