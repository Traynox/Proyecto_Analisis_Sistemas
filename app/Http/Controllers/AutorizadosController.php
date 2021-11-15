<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autorizado;
class AutorizadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autorizados=Autorizado::all();
            return view('autorizados',compact('autorizados'));
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
        $autorizado=new Autorizado();
        $autorizado->nombre=$request->cedula;
        $autorizado->primer_apellido=$request->nombre;
        $autorizado->segundo_apellido=$request->fecha;
        $autorizado->cedula=$request->cedula;
        $autorizado->telefono=$request->nombre;
        $autorizado->id_nacionalidad=$request->fecha;
        $autorizado->id_identificacion=$request->fecha;
        $autorizado->id_parentesco=$request->fecha;

        
        $empleado->save();
        return  redirect()->route('autorizados.index');
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
        $autorizados=Autorizado::all();
        $autorizado=Autorizado::find($id);
        return view('autorizados_editar',compact('autorizados','autorizado'));
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
        $autorizado=Autorizado::find($id);
        $autorizado->nombre=$request->cedula;
        $autorizado->primer_apellido=$request->nombre;
        $autorizado->segundo_apellido=$request->fecha;
        $autorizado->cedula=$request->cedula;
        $autorizado->telefono=$request->nombre;
        $autorizado->id_nacionalidad=$request->fecha;
        $autorizado->id_identificacion=$request->fecha;
        $autorizado->id_parentesco=$request->fecha;
        $autorizado->save();
        return  redirect()->route('autorizados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Autorizado::destroy($id); 
        return back();
    }
}
