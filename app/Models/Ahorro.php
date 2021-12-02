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
        return $this->belongsToMany(Autorizado::class,'ahorros_autorizados','id_ahorro','id_autorizado');
    }
    public function beneficiarios()
    {
        return $this->belongsToMany(Beneficiario::class,'ahorros_beneficiarios','id_ahorro','id_beneficiario');
    }
}
