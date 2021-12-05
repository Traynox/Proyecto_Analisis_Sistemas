<?php

namespace App\Http\Controllers;

use App\Models\Ahorro;
use App\Models\Asociado;
use App\Models\Tipo_ahorro;
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
        $asociados=Asociado::all();
        $tipos_ahorros=Tipo_ahorro::all();
            return view('SAH.ahorros.nuevo_ahorro',compact('asociados','tipos_ahorros')); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo_ahorro=new Ahorro();
        $nuevo_ahorro->fecha_inicio=$request->fech_inicio;
        $nuevo_ahorro->fecha_final=$request->fech_final;
        $nuevo_ahorro->moneda=$request->moneda;
        $nuevo_ahorro->monto_cuota=$request->monto_cuota;
        $nuevo_ahorro->monto_ahorrado=0;
        $nuevo_ahorro->estado=1;
        $nuevo_ahorro->id_tipo_ahorro=$request->tipo_ahorro;
        $nuevo_ahorro->id_asociado=$request->asociado;
        $nuevo_ahorro->save();
        $id=$nuevo_ahorro->id_ahorro;
        return redirect()->route('autorizados.show',$id);
    
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
