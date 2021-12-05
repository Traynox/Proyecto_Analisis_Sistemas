<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_beneficiario';
    protected $fillable = [
        'cedula',
        'nombre_completo',        
        'detalle',
        'valor_beneficio',
        'telefono',
        'celular',
        'direccion',
        'correo',
        'id_nacionalidad',
        'id_identificacion',
        'id_parentesco',
        'id_estado'
    ];

}
