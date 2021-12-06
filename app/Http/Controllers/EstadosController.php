<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

class EstadosController extends Controller
{
    public function registrar_estado(Request $request){

        $estado = new Estado;
        $estado->nombre = $request->estadosSAS;
        $estado->save();
        return redirect()->route('vEstados');

    }

    public function editar_estado($id){

        $estado = Estado::findOrFail($id);
        return view('SAS.estados.editEstados', compact('estado'));
    }

    public function actualizar_estado(Request $request, $id){

        $estado = Estado::find($id);
        $estado->nombre = $request->nEstado;
        $estado->save();
        return redirect()->route('vEstados');
    }

}
