<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;
    protected $primaryKey='id_institucion';
    protected $table='instituciones';
    public $timestamps=false;
}
