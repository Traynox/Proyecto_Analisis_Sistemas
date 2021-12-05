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

}
