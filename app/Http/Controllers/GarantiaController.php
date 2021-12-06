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
        if ($request->descripcionG != '' && $request->documento != '' && $request->descripcionT != '' && $request->valor != '') {          
            $garantia = new Garantia();
            $tasa = new Tasa();

            $tasa->id_asociado = $request->asociado;
            $tasa->descripcion = $request->descripcionT;
            $tasa->valor_tasa = $request->valor;
            
            $garantia->id_asociado = $request->asociado;
            $garantia->id_tipo_credito = $request->tipo;

            if ($request->hasFile('documento')){
                $archivo = $request->documento->store('archivos', 'public');
            }
            $garantia->doc_garantia = $archivo;

            $garantia->descripcion = $request->descripcionG;

            $tasa->save();
            $garantia->save();

            return redirect()->route('vistaGarantias');

        } elseif ($request->descripcionT != '' && $request->valor != '') {// tasas           
            $tasa = new Tasa();

            $tasa->id_asociado = $request->asociado;
            $tasa->descripcion = $request->descripcionT;
            $tasa->valor_tasa = $request->valor;

            $tasa->save();

            return redirect()->route('vistaGarantias');


        } elseif ($request->descripcionG != '' && $request->documento != '') {// garantias
            $garantia = new Garantia();

            $garantia->id_asociado = $request->asociado;
            $garantia->id_tipo_credito = $request->tipo;

            if ($request->hasFile('documento')){
                $archivo = $request->documento->store('archivos', 'public');
            }
            $garantia->doc_garantia = $archivo;

            $garantia->descripcion = $request->descripcionG;

            $garantia->save();

            return redirect()->route('vistaGarantias');
        } else {
            return 'NO';
        }
    }

    public function deleteG($id)
    {
        $garantia = Garantia::find($id);
        $garantia->delete();

        return back();
    }

    public function deleteT($id)
    {
        $garantia = Tasa::find($id);
        $garantia->delete();

        return back();
    }

    public function edit_G($id)
    {
        $garantia = Garantia::find($id);
        $tipos = tipoCredito::all();
        $asociados = Asociado::all();

        return view('SPR.CreditosYGarantias.EditarGarantia', compact('garantia','tipos', 'asociados'));
    }

    public function updateG(Request $request, $id)
    {
        $garantia = Garantia::find($id);

            $garantia->id_asociado = $request->asociado;
            $garantia->id_tipo_credito = $request->tipo;

            if ($request->hasFile('documento')){
                $archivo = $request->documento->store('archivos', 'public');
                $garantia->doc_garantia = $archivo;
            }

            $garantia->descripcion = $request->descripcionG;

            $garantia->save();

            return redirect()->route('vistaGarantias');
    }

    public function edit_T($id)
    {
        $tasa = Tasa::find($id);
        $tipos = tipoCredito::all();
        $asociados = Asociado::all();

        return view('SPR.CreditosYGarantias.EditarTasa', compact('tasa','tipos', 'asociados'));
    }

    public function updateT(Request $request, $id)
    {
        $tasa = Tasa::find($id);

        $tasa->id_asociado = $request->asociado;
        $tasa->descripcion = $request->descripcion;
        $tasa->valor_tasa = $request->valor;

        $tasa->save();

        return redirect()->route('vistaGarantias');
    }

    public function descargarDoc($id)
    {
        $garantia = Garantia::find($id);

        $file= public_path(). '/storage/' .$garantia->doc_garantia;

        return response()->download($file);

    }

}
