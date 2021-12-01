<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociado extends Model
{
    protected $table = 'asociados';
    protected $primaryKey = 'id_asociado';
    public $timestamps = false;
}
