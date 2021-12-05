<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identificacion extends Model
{
    use HasFactory;
    protected $primaryKey='id_identificacion';
    protected $table='identificaciones';
    public $timestamps=false;
    protected $fillable = [
        'tipo'
    ];
}
