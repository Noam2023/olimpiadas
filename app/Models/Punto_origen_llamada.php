<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Llamado;

class Punto_origen_llamada extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo

    protected $fillable = [
        'origen',
        'habitacion_id',
    ];

    public function llamados() {
        return $this->hasMany(Llamado::class);
    }

    public function origen_habitacion() {
        return $this->BelongsTo(Habitacion::class);
    }
}
