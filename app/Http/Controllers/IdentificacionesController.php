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

    public function editar_identificacion($id){

        $identificacion = Identificacion::findOrFail($id);
        return view('SAS.tipos_id.editTipoID', compact('identificacion'));
    }

    public function actualizar_identificacion(Request $request, $id){

        $identificacion = Identificacion::find($id);
        $identificacion->tipo = $request->etipoId;
        $identificacion->save();
        return redirect()->route('vIdentificaciones');
    }
}
