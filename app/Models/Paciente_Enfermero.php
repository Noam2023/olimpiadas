<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente_enfermero extends Model
{
    use HasFactory;
    public $timestamps = false; // Esto desactiva las marcas de tiempo
    public $incrementing = false; 

    protected $fillable = [
        'paciente_id',
        'empleado_id'
    ];
    protected $primaryKey = ['paciente_id', 'empleado_id'];


   
}
