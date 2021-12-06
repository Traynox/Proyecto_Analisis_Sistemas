<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasa extends Model
{
    protected $table = 'tasas_preferenciales';
    protected $primaryKey = 'id_tasa';
    public $timestamps = false;

    public function asociado()
    {
        return $this->belongsTo(Asociado::class, 'id_asociado');
    }

}
