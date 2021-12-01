<?php

namespace App\Http\Controllers;

use App\Models\Tipo_ahorro;
use Illuminate\Http\Request;

class TipoAhorroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_ahorros=Tipo_ahorro::all();
        return view('SAH.tipos_ahorros.index', compact('tipos_ahorros'));
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
        $tipo_ahorro= new Tipo_ahorro();
        $tipo_ahorro->nombre=$request->nombre;
        $tipo_ahorro->descripcion=$request->descripcion;
       
        $tipo_ahorro->save();
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
        $tipo_ahorro=Tipo_ahorro::find($id);
        $tipo_ahorro->nombre=$request->nombre;
        $tipo_ahorro->descripcion=$request->descripcion;
       
        $tipo_ahorro->save();
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
        Tipo_ahorro::destroy($id);
        $mensaje = "Se elimino con exito";
        return back()->with('mensaje',$mensaje);
    }
}
