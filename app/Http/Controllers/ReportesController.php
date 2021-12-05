<?php

namespace App\Http\Controllers;

use App\Models\Ahorro;
use App\Models\Asociado;
use App\Models\Tipo_ahorro;
use Illuminate\Http\Request;
 use Barryvdh\DomPDF\Facade as PDF;
//use PDF;
class ReportesController extends Controller
{
    public function index()
    {
        return view('SAH.reportes.index');
    }

    public function vistaReporte_9_1(){

        return view('SAH.reportes.autorizados-beneficiarios');
    }

    public function reporte_9_1(Request $request){

        $ahorro=null;
        $ahorro=Ahorro::with('beneficiarios','autorizados')->where('nombre',$request->nombre)->first();
        
        if($ahorro==null){
            return redirect()->route('show.reporte_9_1');
        }
        $pdf=PDF::loadview('SAH.reportes.pdf_9_1',compact('ahorro'))->setPaper('a4','portrait');
        return $pdf->stream();
    }
    public function vistaReporte_9_2(){

        return view('SAH.reportes.bloqueos_por_cuenta');
    }

    public function reporte_9_2(Request $request){

        $ahorro=null;
        if($request->estado==1){

            $ahorro=Ahorro::with('penalizaciones')->where('nombre','=',$request->cuenta)
            ->where('estado','=',$request->estado)->first();
           
        }else{
            $ahorro=Ahorro::with('penalizaciones')->where('nombre','=',$request->cuenta)
            ->where('estado','=',$request->estado)->first();
          }
   
          if($ahorro==null){
            return redirect()->route('show.reporte_9_2');
        }
        $pdf=PDF::loadview('SAH.reportes.pdf_9_2',compact('ahorro'))->setPaper('a4','portrait');
        return $pdf->stream();
    }
    public function vistaReporte_9_4(){

        return view('SAH.reportes.cuentas_asociado');
    }

    public function reporte_9_4(Request $request){

        // $asociado=Asociado::with('penalizaciones')->where('cedula','=',$request->cedula,'and','estado','=',1)->first();
        $asociado=null;
        $asociado=Asociado::with('ahorrosActivos')->where('cedula',$request->cuenta)->first();
        if($asociado==null){
            return redirect()->route('show.reporte_9_4');
        }
        $pdf=PDF::loadview('SAH.reportes.pdf_9_4',compact('asociado'))->setPaper('a4','portrait');
        return $pdf->stream();
    }

    
    public function vistaReporte_9_14(){

        $tipos_ahorros=Tipo_ahorro::all();
        return view('SAH.reportes.transacciones_por_cuenta',compact('tipos_ahorros'));
    }

    public function reporte_9_14(Request $request){

        $ahorro=null;
        $tipo_reporte=null;
        if($request->cuenta==null){
            $ahorros=Ahorro::with('transacciones')
            ->where('id_tipo_ahorro','=',$request->tipo_ahorro)->get();
            $tipo_reporte="Reporte de transacciones por tipo de ahorro";
        }else{
            $ahorros=Ahorro::with('transacciones')
            ->where('nombre','=',$request->cuenta)
            ->where('id_tipo_ahorro','=',$request->tipo_ahorro)->get();
            $tipo_reporte="Reporte de transacciones de cuenta";
        }
        
        if($ahorro==null &&$tipo_reporte==null){
            return redirect()->route('show.reporte_9_14');
        }
        // $asociado=Asociado::with('penalizaciones')->where('cedula','=',$request->cedula,'and','estado','=',1)->first();
        return $ahorro;
        $pdf=PDF::loadview('SAH.reportes.pdf_9_14',compact('ahorro','tipo_reporte'))->setPaper('a4','portrait');
        return $pdf->stream();
    }



}
