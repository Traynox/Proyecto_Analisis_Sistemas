<?php

namespace App\Http\Controllers;

use App\Models\Asociado;
use App\Models\Garantia;
use App\Models\Tasa;
use App\Models\tipoCredito;
use Illuminate\Http\Request;

class GarantiaController extends Controller
{

    public function index()
    {
        $tasas = Tasa::all();
        $garantias = Garantia::all();

        return view('SPR.CreditosYGarantias.vistaGarantiasTasas', compact('tasas', 'garantias'));
    }

    public function create()
    {
        $tipos = tipoCredito::all();
        $asociados = Asociado::all();
        return view('SPR.CreditosYGarantias.gestionGarantiasTasas', compact('tipos', 'asociados'));
    }

    public function store(Request $request)
    {
        if ($request->descripcionG == '' && $request->documento != '') {
            return 'holi';
        } elseif ($request->descripcionT != '' && $request->valor != '') {
            return 'hola';
        } else {
            return 'NO';
        }
    }
}
