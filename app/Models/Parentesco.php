<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    use HasFactory;
    protected $primaryKey='id_parentesco';
    protected $table='parentescos';
    public $timestamps=false;
    protected $fillable = [
        'nombre'
    ];
}
