<?php

namespace App\Http\Controllers;

use App\Models\Asociado;
use App\Models\LineaCredito;
use App\Models\tipoCredito;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class LineaCreditoController extends Controller
{
    public function index()
    {
        $lineaCreditos = LineaCredito::all();
        return view('SPR.LineaCredito.vistaLineaCredito', compact('lineaCreditos'));
    }

    public function create()
    {
        $tipos = tipoCredito::all();
        $asociados = Asociado::all();
        return view('SPR.LineaCredito.crearLineaCredito', compact('tipos', 'asociados'));
    }


    public function store(Request $request)
    {
        $lineaCredito = new LineaCredito();
        
        $lineaCredito->monto = $request->monto;
        $lineaCredito->tasa_interes = $request->tasaInteres;
        $lineaCredito->fiador = $request->nombreFiador;
        $lineaCredito->id_tipo_credito = $request->tipo;
        $lineaCredito->id_asociado = $request->asociado;

        $lineaCredito->save();

        return redirect()->route('Lineascreditos');
    }

    public function delete($id)
    {
        $lineaCredito = LineaCredito::find($id);
        $lineaCredito->delete();

        return back();
    }

    public function pdf()
    {
        $pdf = PDF::loadView('pdf');
        return $pdf->download('Reporte.pdf');    
    }
}
