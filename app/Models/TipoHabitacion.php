<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Habitacion;


class TipoHabitacion extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo
    protected $fillable = [
        'tipo_habitacion',
    ];
    public function habitacion() {
        return $this->hasMany(Habitacion::class);
    }
}
