<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeneficiariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficiarios=Autorizado::all();
            return view('beneficiarios',compact('beneficiarios'));
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
        $beneficiario=new Autorizado();
        $beneficiario->nombre=$request->cedula;
        $beneficiario->primer_apellido=$request->nombre;
        $beneficiario->segundo_apellido=$request->fecha;
        $beneficiario->cedula=$request->cedula;
        $beneficiario->telefono=$request->nombre;
        $beneficiario->direccion=$request->nombre;
        $beneficiario->correo=$request->nombre;
        $beneficiario->id_nacionalidad=$request->fecha;
        $beneficiario->id_identificacion=$request->fecha;
        $beneficiario->id_parentesco=$request->fecha;
        $beneficiario->id_asociado=$request->fecha;
        $beneficiario->id_estado=$request->nombre;

        
        $beneficiario->save();
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
        $beneficiarios=Autorizado::all();
        $beneficiario=Autorizado::find($id);
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
        $beneficiario=Autorizado::find($id);
        $beneficiario->nombre=$request->cedula;
        $beneficiario->primer_apellido=$request->nombre;
        $beneficiario->segundo_apellido=$request->fecha;
        $beneficiario->cedula=$request->cedula;
        $beneficiario->telefono=$request->nombre;
        $beneficiario->id_nacionalidad=$request->fecha;
        $beneficiario->id_identificacion=$request->fecha;
        $beneficiario->id_parentesco=$request->fecha;
        $beneficiario->save();
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
