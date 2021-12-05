<?php

namespace App\Http\Controllers;

use App\Models\Nacionalidad;
use Illuminate\Http\Request;

class PaisesController extends Controller
{
    public function nacionalidades(){

        $nacionalidades = Nacionalidad::all();
        return view('SAS.nacionalidades.gestionNac', compact('nacionalidades'));
    }
    
}
