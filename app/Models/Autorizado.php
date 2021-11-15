<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorizados extends Model
{
    protected $primaryKey='id_autorizado';
    protected $table='autorizados';
    public $timestamps=false;

    public function ahorros(){
        return $this->hasMany(Ahorro::class);
    }
}
