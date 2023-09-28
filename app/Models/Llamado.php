<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llamado extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    
    protected $fillable = [
        'es_atendido',
        'es_urgente',
        'origen_id',
    ];

    public function punto() {
        return $this->belongsTo(Punto_origen_llamada::class);
    }
}
