<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_ahorro extends Model
{
    protected $primaryKey='id_tipo_ahorro';
    protected $table='tipos_ahorros';
    public $timestamps=false;
    use HasFactory;
}
