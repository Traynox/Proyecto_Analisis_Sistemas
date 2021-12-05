<?php

namespace App\Http\Controllers;

use App\Models\Ahorro;
use App\Models\Asociado;
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

        $ahorro=Ahorro::with('beneficiarios','autorizados')->where('nombre',$request->nombre)->first();
 
        $pdf=PDF::loadview('SAH.reportes.pdf_9_1',compact('ahorro'))->setPaper('a4','portrait');
        return $pdf->stream();
    }
    public function vistaReporte_9_2(){

        return view('SAH.reportes.bloqueos_por_cuenta');
    }

    public function reporte_9_2(Request $request){

        $ahorro=null;
        if($request->estado==1){
            $ahorro=Ahorro::with('penalizaciones')->where('nombre','=',$request->cuenta,'and','estado','=',$request->estado)->first();
           
        }else{
            $ahorro=Ahorro::with('penalizaciones')->where('nombre','=',$request->cuenta,'and','estado','=',$request->estado)->first();
          }
   
        $pdf=PDF::loadview('SAH.reportes.pdf_9_2',compact('ahorro'))->setPaper('a4','portrait');
        return $pdf->stream();
    }
    public function vistaReporte_9_4(){

        return view('SAH.reportes.cuentas_asociado');
    }

    public function reporte_9_4(Request $request){

        // $asociado=Asociado::with('penalizaciones')->where('cedula','=',$request->cedula,'and','estado','=',1)->first();
        $asociado=Asociado::with('ahorrosActivos')->where('cedula',$request->cuenta)->first();
        $pdf=PDF::loadview('SAH.reportes.pdf_9_4',compact('asociado'))->setPaper('a4','portrait');
        return $pdf->stream();
    }

    
}
