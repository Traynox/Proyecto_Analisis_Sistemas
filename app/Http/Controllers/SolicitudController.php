<?php

namespace App\Http\Controllers;

use App\Models\Asociado;
use App\Models\Prestamo;
use App\Models\Solicitud;
use App\Models\tipoCredito;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index()
    {
        $solicitudes = Solicitud::all();
        return view('SPR.CreditosYGarantias.vistaSolicitudCredito', compact('solicitudes'));

    }

    public function create()
    {
        $tipos = tipoCredito::all();
        $asociados = Asociado::all();
         return view('SPR.CreditosYGarantias.solicitudCredito', compact('tipos', 'asociados'));    
    }

    public function store(Request $request)
    {
        $solicitudNueva = new Solicitud();
        $prestamoNuevo = new Prestamo();

        $solicitudNueva->estado = 1;
        $solicitudNueva->id_tipo_credito = $request->tipo;
        $solicitudNueva->id_asociado = $request->asociado;
        
        $solicitudNueva->save();


        if ($request->hasFile('domicilio')){
            $archivoD = $request->domicilio->store('archivos', 'public');
        }
        $prestamoNuevo->comprobante_domicilio = $archivoD;

        if ($request->hasFile('ingresos')){
            $archivoI = $request->ingresos->store('archivos', 'public');
        }
        $prestamoNuevo->comprobante_ingresos = $archivoI;

        if ($request->hasFile('carta')){
            $archivoC = $request->carta->store('archivos', 'public');
        }
        $prestamoNuevo->carta_patronal = $archivoC;

        if ($request->hasFile('historial')){
            $archivoH = $request->historial->store('archivos', 'public');
        }
        $prestamoNuevo->historial_crediticio = $archivoH;

        $prestamoNuevo->id_asociado = $request->asociado;


        $prestamoNuevo->id_solicitud = $solicitudNueva->id_solicitud;  //vista admin

        $prestamoNuevo->save();

        return redirect()->route('vistaSolicitudes');

    }

    public function delete($id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->delete();

        return back();
    }

    public function edit($id)
    {
        $tipos = tipoCredito::all();
        $asociados = Asociado::all();
        $solicitud = Solicitud::find($id);
         return view('SPR.CreditosYGarantias.EditarsSolicitudCredito', compact('tipos', 'asociados', 'solicitud'));    
    }

    public function update(Request $request,$id)
    {
        $solicitudNueva =  Solicitud::find($id);

        $solicitudNueva->estado = $request->estado;
        $solicitudNueva->id_tipo_credito = $request->tipo;
        $solicitudNueva->id_asociado = $request->asociado;
        
        $solicitudNueva->save();

        return redirect()->route('vistaSolicitudes');
    }

    public function indexPrestamos()
    {
        $prestamos = Prestamo::all();

        return view('SPR.inicio', compact('prestamos'));
        
    }

    public function descargarCD($id)
    {
        $prestamo = Prestamo::find($id);

        $file= public_path(). '/storage/' .$prestamo->comprobante_domicilio;

        return response()->download($file);

    }

    public function descargarCI($id)
    {
        $prestamo = Prestamo::find($id);

        $file= public_path(). '/storage/' .$prestamo->comprobante_ingresos;

        return response()->download($file);

    }

    public function descargarCartaP($id)
    {
        $prestamo = Prestamo::find($id);

        $file= public_path(). '/storage/' .$prestamo->carta_patronal;

        return response()->download($file);

    }

    public function descargarHC($id)
    {
        $prestamo = Prestamo::find($id);

        $file= public_path(). '/storage/' .$prestamo->historial_crediticio;

        return response()->download($file);

    }

}
