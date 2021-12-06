<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// No tiene controller
class Estado extends Model
{
    protected $primaryKey='id_estado';
    protected $table='estados';
    public $timestamps=false;
    use HasFactory;
}
