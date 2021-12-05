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

}
