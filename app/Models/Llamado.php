<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llamado extends Model
{
    use HasFactory;
    public $timestamps = false; 
    
    protected $fillable = [
        'es_atendido',
        'es_urgente',
        'habitacion_id',
        'zona_id',
    ];

    public function llamadaDeEmergencia()
    {
        return $this->hasOne(Emergencia::class);
    }
}
