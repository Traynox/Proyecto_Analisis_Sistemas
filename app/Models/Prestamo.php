<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = 'prestamos';
    protected $primaryKey = 'id_prestamo';
    public $timestamps = false;

    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class, 'id_solicitud');
    }
}
