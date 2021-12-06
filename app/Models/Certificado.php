<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $primaryKey='id_certificado';
    protected $table='certificados';
    public $timestamps=false;
    use HasFactory;
    // public function aportes(){
    //     return $this->hasMany(Aporte::class,'id_aporte');
    // }

    public function aportes(){
        return $this->belongsTo(Aporte::class, 'id_aporte');
    }

    public function tipos_certificados(){
        return $this->belongsTo(TipoCertificado::class, 'id_tipo_certificado');
    }

    public function ahorros(){
        return $this->belongsTo(Ahorros::class, 'id_ahorro');
    }
}
