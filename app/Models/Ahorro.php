<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ahorro extends Model
{
    protected $primaryKey='id_ahorro';
    protected $table='ahorros';
    public $timestamps=false;

    public function autorizados()
    {
        return $this->belongsToMany(Autorizado::class,'ahorros_autorizados','id_ahorro','id_autorizado')
        ->withPivot('id_ahorro','id_autorizado');
    }
    public function beneficiarios()
    {
        return $this->belongsToMany(Beneficiario::class,'ahorros_benefeciarios','id_ahorro','id_beneficiario')
        ->withPivot('id_ahorro','id_beneficiario','porcentaje');
    }

    public function tipo_ahorro()
    {
        return $this->belongsTo(Tipo_ahorro::class,'id_tipo_ahorro');
    }

    public function asociado()
    {
        return $this->belongsTo(Asociado::class,'id_asociado');
    }
    public function penalizaciones()
    {
        $fecha=request('fecha');//obtiene el valor de cualquier valor que se mando del ultimo form mediante el nombre
       
        return $this->hasMany(Penalizacion::class,'id_penalizacion')->where('fecha','<',$fecha);
    }
    public function transacciones()
    {
        return $this->hasMany(Transaccion::class,'id_transaccion');
    }

}
