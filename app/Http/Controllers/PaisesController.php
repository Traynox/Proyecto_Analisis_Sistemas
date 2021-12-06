<?php

namespace App\Http\Controllers;

use App\Models\Nacionalidad;
use Illuminate\Http\Request;

class PaisesController extends Controller
{
    
    public function registrar_pais(Request $request){

        $nacionalidad = new Nacionalidad;
        $nacionalidad->abreviatura = $request->abrevNac;
        $nacionalidad->pais = $request->paisNac;
        $nacionalidad->save();
        return redirect()->route('vNacionalidades');
    }

    public function editar_pais($id){

        $nacionalidad = Nacionalidad::findOrFail($id);
        return view('SAS.nacionalidades.editNac', compact('nacionalidad'));
    }

    public function actualizar_pais(Request $request, $id){

        $nacionalidad = Nacionalidad::find($id);
        $nacionalidad->abreviatura = $request->eabrevNac;
        $nacionalidad->pais = $request->epaisNac;
        $nacionalidad->save();
        return redirect()->route('vNacionalidades');
    }

    public function borrar_nacionalidad($id){

        $nacionalidad = Nacionalidad::findOrFail($id);
        $nacionalidad->delete();
        return back();
    }

}
