<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoCredito extends Model
{
    protected $table = 'tipo_credito';
    protected $primaryKey = 'id_tipo_credito';
    public $timestamps = false;
}
