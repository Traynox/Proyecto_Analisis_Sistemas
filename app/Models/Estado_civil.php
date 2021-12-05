<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_civil extends Model
{
    use HasFactory;
    protected $primaryKey='id_estado_civil';
    protected $table='estados_civiles';
    public $timestamps=false;
}
