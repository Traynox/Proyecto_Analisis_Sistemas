<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociado extends Model
{
    use HasFactory;
    protected $primaryKey='id_asociado';
    protected $table='asociados';
    public $timestamps=false;

    public function ahorrosActivos(){
        return $this->hasMany(Ahorro::class,'id_asociado')->where('estado',1);
    }
    public function ahorrosInactivos(){
        return $this->hasMany(Ahorro::class,'id_asociado')->where('estado',0);
    }
    public function estadoCivil()
    {
        return $this->belongsTo(Estado_civil::class,'id_estado_civil');  
    }
    public function nacionalidad()
    {
        return $this->belongsTo(Nacionalidad::class,'id_nacionalidad');  
    }
    public function identificacion()
    {
        return $this->belongsTo(Identificacion::class,'id_identificacion');  
    }
    public function institucion()
    {
        return $this->belongsTo(Institucion::class,'id_institucion');  
    }
    public function profesion()
    {
        return $this->belongsTo(Profesion::class,'id_profesion');  
    }
}
