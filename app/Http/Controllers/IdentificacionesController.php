<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identificacion;

class IdentificacionesController extends Controller
{
    public function registrar_tipo_id(Request $request){

        $identificacion = new Identificacion;
        $identificacion->tipo = $request->tipoId;
        $identificacion->save();
        return redirect()->route('vIdentificaciones');
    }
}
