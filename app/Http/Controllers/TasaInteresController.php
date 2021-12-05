<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasaInteresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasa_interes=Tasa_valor::all();//revisar
        return view('SAH.tasa_interes.index', compact('tasa_interes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tasa_valor= new Tasa_valor();
        $id_tasa->id_tasa=$request->id_tasa;
        $descripcion->nombre=$request->descripcion;
        $valor_tasa->descripcion=$request->valor_tasa;
       
        $tasa_valor->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tasa_valor=Tasa_valor::find($id);
        $id_tasa->id_tasa=$request->id_tasa;
        $descripcion->descripcion=$request->descripcion;
        $valor_tasa->valor_tasa=$request->valor_tasa;
       
        $tasa_valor->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tasa_interes::destroy($id);
        $mensaje = "Se elimino con exito";
        return back()->with('mensaje',$mensaje);
    }
}
