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

    public function editar_profesion($id){

        $profesion = Profesion::findOrFail($id);
        return view('SAS.profesiones.editProfesion', compact('profesion'));
    }

    public function actualizar_profesion(Request $request, $id){

        $profesion = Profesion::find($id);
        $profesion->nombre = $request->profesionName;
        $profesion->save();
        return redirect()->route('vProfesiones');
    }

}
