<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;

    protected $table = 'estado_civiles';
    protected $primaryKey = 'id_estado_civil';
    protected $fillable = [
        'nombre'
    ];

}
