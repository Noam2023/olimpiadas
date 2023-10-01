<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Habitacion;


class Zona extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo

    protected $fillable= [
        'nombre_zona',
    ];

    public function habitacion() {
        return $this->hasMany(Habitacion::class);
    }

   
}
