<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// No tienen controller
class Aporte extends Model
{
    protected $primaryKey='id_aporte';
    protected $table='aportes';
    public $timestamps=false;
    use HasFactory;
    public function estados(){
        // return $this->hasMany(Estado::class,'id_estado');
        return $this->belongsTo(Estado::class,'id_estado');

    }
}
