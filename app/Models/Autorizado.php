<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorizado extends Model
{
    use HasFactory;
    protected $primaryKey='id_autorizado';
    protected $table='autorizados';
    public $timestamps=false;

    public function ahorros(){
        return $this->hasMany(Ahorro::class);
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
