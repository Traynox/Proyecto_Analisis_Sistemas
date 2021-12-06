<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoCivil;

class EstadoCivilController extends Controller
{
    public function registrar_estado_civil(Request $request){

        $estado_civil = new EstadoCivil;
        $estado_civil->nombre = $request->eCivil;
        $estado_civil->save();
        return redirect()->route('vECiviles');
    }

    public function editar_estado_civil($id){

        $estado_civil = EstadoCivil::findOrFail($id);
        return view('SAS.estado_civil.editECivil', compact('estado_civil'));
    }

    public function actualizar_estado_civil(Request $request, $id){

        $estado_civil = EstadoCivil::find($id);
        $estado_civil->nombre = $request->modEstadoCivil;
        $estado_civil->save();
        return redirect()->route('vECiviles');
    }

}
