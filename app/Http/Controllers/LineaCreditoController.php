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

    public function edit($id)
    {
        $lineaCredito = LineaCredito::find($id);
        $asociados = Asociado::all();
        $tipos = tipoCredito::all();
        return view('SPR.LineaCredito.editarLineaCredito', compact('lineaCredito', 'asociados','tipos'));
        
    }

    public function update(Request $request, $id)
    {
        $lineaCredito = LineaCredito::find($id);
        
        $lineaCredito->monto = $request->monto;
        $lineaCredito->tasa_interes = $request->tasaInteres;
        $lineaCredito->fiador = $request->nombreFiador;
        $lineaCredito->id_tipo_credito = $request->tipo;
        $lineaCredito->id_asociado = $request->asociado;

        $lineaCredito->save();

        return redirect()->route('Lineascreditos');

    }

    public function indexDesembol($id)
    {
        $lineaCredito = LineaCredito::find($id);
        return view('SPR.LineaCredito.vistaDesembolso', compact('lineaCredito'));
        
    }

    public function desembolsar(Request $request, $id)
    {
        $lineaCredito = LineaCredito::find($id);
        
        $montoNuevo =  $lineaCredito->monto - $request->montoDesembolso;

        $lineaCredito->monto = $montoNuevo;
        $lineaCredito->save();

        return redirect()->route('Lineascreditos');

    }

    public function pdfArreglo()
    {
        $pdf = PDF::loadView('pdf');
        return $pdf->download('Arreglo de pago.pdf');    
    }

    public function pdfCobro()
    {
        $pdf = PDF::loadView('pdf');
        return $pdf->download('Cobro Judicial.pdf');    
    }
}
