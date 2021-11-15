<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ahorros extends Model
{
    protected $primaryKey='id_ahorro';
    protected $table='ahorros';
    public $timestamps=false;

    public function autorizados()
    {
        return $this->belongsToMany(Autorizado::class);
    }
    public function beneficiarios()
    {
        return $this->belongsToMany(Beneficiario::class);
    }
}
