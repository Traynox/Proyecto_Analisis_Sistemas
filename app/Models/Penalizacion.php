<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penalizacion extends Model
{
    use HasFactory;
    protected $primaryKey='id_penalizacion';
    protected $table='penalizaciones';
    public $timestamps=false;
}
