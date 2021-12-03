<?php

namespace App\Http\Controllers;

use App\Models\Ahorro;
use Illuminate\Http\Request;
class AhorrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ahorros=Ahorro::all();

        return view('SAH.ahorros.index_ahorro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('SAH.ahorros.nuevo_ahorro'); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $nuevo_ahorro=new Credito();
        $nuevo_ahorro->nombre="";
        $nuevo_ahorro->duracion=$request->duracion;
        $nuevo_ahorro->fecha_inicio=$request->fecha_inicio;
        $nuevo_ahorro->fecha_final=$request->fecha_final;
        $nuevo_ahorro->moneda=$request->moneda;
        $nuevo_ahorro->monto_cuota=$request->monto_cuota;
        $nuevo_ahorro->monto_ahorrado=0;
        $nuevo_ahorro->estado=1;
        $nuevo_ahorro->tipo_pago=" ";
        $nuevo_ahorro->tipo_ahorro=$request->id_tipo_ahorro;
        $nuevo_ahorro->asociado=$request->id_asociado;
        $nuevo_ahorro->id_penalizacion=null;

        // $nuevo_ahorro->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
       
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
