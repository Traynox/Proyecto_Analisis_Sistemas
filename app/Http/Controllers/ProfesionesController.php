<?php

namespace App\Http\Controllers;

use App\Models\Profesion;
use Illuminate\Http\Request;

class ProfesionesController extends Controller
{
    
    public function registrar_profesion(Request $request){

        $profesion = new Profesion;
        $profesion->nombre = $request->nProfesion;
        $profesion->save();
        return redirect()->route('vProfesiones');

    }

}
