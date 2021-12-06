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
        // $estados=Estado:all();

        return view('SAH.ahorros.index_ahorro',compact('ahorros'));
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
        $asociados=Asociado::all();
        $tipos_ahorros=Tipo_ahorro::all();
        $ahorro=Ahorro::find($id);
    return view('SAH.ahorros.editar_ahorro',compact('ahorro','asociados','tipos_ahorros')); 
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
        $ahorro=Ahorro::find($id);
        $ahorro->fecha_inicio=$request->fech_inicio;
        $ahorro->fecha_final=$request->fech_final;
        $ahorro->moneda=$request->moneda;
        $ahorro->monto_cuota=$request->monto_cuota;
        $ahorro->monto_ahorrado=0;
        $ahorro->estado=1;
        $ahorro->id_tipo_ahorro=$request->tipo_ahorro;
        $ahorro->id_asociado=$request->asociado;
        $ahorro->save();
        $id=$ahorro->id_ahorro;
        return redirect()->route('autorizados.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ahorro::destroy($id); 
        return back();
    }
    public function monto_ahorro(Request $request){
        $suma=0;
        $ahorro=Ahorro::find($request->id_ahorro);
        $suma=$ahorro->monto_ahorrado+$request->cuota;
        $ahorro->monto_ahorrado=$suma;
        $ahorro->save();
        return back();

    }
    
}
