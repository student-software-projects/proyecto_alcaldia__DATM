<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugadores extends Model
{
    use HasFactory;

    protected $table = 'jugadores';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'apellido',
        'numero_dorsal',
        'apodo',
        'equipos_id'
    ];

}
