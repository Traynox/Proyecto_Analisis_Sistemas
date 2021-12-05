<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    use HasFactory;

    protected $table = 'familiares';
    protected $primaryKey = 'id_familiar';
    protected $fillable = [
        'cedula',
        'nombre_completo',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'celular',
        'correo',
        'id_nacionalidad',
        'id_identificacion',
        'id_profesion',
        'id_parentesco',
        'id_estado'
    ];
}
