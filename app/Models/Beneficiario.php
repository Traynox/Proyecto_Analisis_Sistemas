<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;
    protected $primaryKey='id_beneficiario';
    protected $table='beneficiarios';
    public $timestamps=false;

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
    public function ahorros(){
        return $this->hasMany(Ahorro::class,'id_ahorro');
    }
    public function ahorro(){
        return $this->belongsTo(Ahorro::class,'id_ahorro');
    }
    public function nacionalidad(){
        return $this->belongsTo(Nacionalidad::class,'id_nacionalidad');
    }
    public function parentesco(){
        return $this->belongsTo(Parentesco::class,'id_parentesco');
    }

    

}
