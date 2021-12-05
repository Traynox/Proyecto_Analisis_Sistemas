<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;
    protected $primaryKey='id_nacionalidad';
    protected $table='nacionalidades';
    public $timestamps=false;
    protected $fillable = [
        'abreviatura',        
        'pais'
    ];
    
    public function beneciarios()
    {
        return $this->hasMany(Beneficiario::class,'id_nacionalidad');
    }
    public function autorizados()
    {
        return $this->hasMany(Autorizado::class,'id_nacionalidad');
    }
    public function asociados()
    {
        return $this->hasMany(Asociado::class,'id_nacionalidad');
    }

  

    
}
