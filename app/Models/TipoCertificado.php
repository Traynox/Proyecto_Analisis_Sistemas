<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Esta no tiene controller
class TipoCertificado extends Model
{
    protected $primaryKey='id_tipo_certificado';
    protected $table='tipos_certificados';
    public $timestamps=false;
    use HasFactory;
}
