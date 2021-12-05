<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    protected $primaryKey='id_beneficiario';
    protected $table='beneficiarios';
    public $timestamps=false;

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
