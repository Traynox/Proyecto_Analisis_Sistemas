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
        return $this->hasMany(Ahorro::class);
    }
}
