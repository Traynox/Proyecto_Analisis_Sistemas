<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    protected $table = 'garantias_de_pagos';
    protected $primaryKey = 'id_garantia';
    public $timestamps = false;

    public function asociado()
    {
        return $this->belongsTo(Asociado::class, 'id_asociado');
    }

    public function tipo()
    {
        return $this->belongsTo(tipoCredito::class, 'id_tipo_credito');
    }
}
