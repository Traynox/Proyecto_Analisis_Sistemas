<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    use HasFactory;
    protected $primaryKey='id_profesion';
    protected $table='profesiones';
    public $timestamps=false;
    protected $fillable = [
        'nombre'
    ];
}
