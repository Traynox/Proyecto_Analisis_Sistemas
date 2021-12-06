<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasa_interes extends Model
{
    use HasFactory;
    protected $primaryKey='id_tasa_interes';
    protected $table='tasa_intereses';
    public $timestamps=false;

}
