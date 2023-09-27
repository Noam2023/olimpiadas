<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    public $timestamps = false; 
    public $incrementing = false; 
    protected $primaryKey = ['id', 'zona_id']; 

    public function zona() {
    return $this->belongsTo(Zona::class);
    }

    protected $fillable = [
        'zona_id',
        'tipo_habitacion_id',
    ];
    
    
}



