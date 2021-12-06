<?php

namespace App\Http\Controllers;

use App\Models\Beneficiario;
use App\Models\Ahorro;

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
            $beneficiarios=Beneficiario::all();
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
        $beneficiario=new Beneficiario();
        $beneficiario->nombre=$request->nombre;
        $beneficiario->primer_apellido=$request->primer_apellido;
        $beneficiario->segundo_apellido=$request->segundo_apellido;
        $beneficiario->cedula=$request->cedula;
        $beneficiario->telefono=$request->telefono;
        $beneficiario->direccion=$request->direccion;
        $beneficiario->correo=$request->correo;
        $beneficiario->id_nacionalidad=$request->nacionalidad;
        $beneficiario->id_identificacion=$request->identificacion;
        $beneficiario->id_parentesco=$request->parentesco; 
         $beneficiario->save();
         $ahorro=Ahorro::find($request->id_ahorro);
         $arrayId=[];
        $arrayId[0]=['id_beneficiario'=>$beneficiario->id_beneficiario, 'porcentaje' => $request->porcentaje];
        
         $ahorro->beneficiarios()->attach($arrayId);
         return  back();
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
        // $beneficiario=Beneficiario::find($id);
        // return view('SAH.ahorros.editar_beneficiario',compact('beneficiario'));
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
        $beneficiario=Beneficiario::find($id);
        $beneficiario->nombre=$request->nombre;
        $beneficiario->primer_apellido=$request->primer_apellido;
        $beneficiario->segundo_apellido=$request->segundo_apellido;
        $beneficiario->cedula=$request->cedula;
        $beneficiario->telefono=$request->telefono;
        $beneficiario->direccion=$request->direccion;
        $beneficiario->correo=$request->correo;
        $beneficiario->id_nacionalidad=$request->nacionalidad;
        $beneficiario->id_identificacion=$request->identificacion;
        $beneficiario->id_parentesco=$request->parentesco; 
        $beneficiario->save();

        $ahorro=Ahorro::find($request->id_ahorro);
        $ahorro->beneficiarios()->detach($beneficiario->id_beneficiario);

         $array=[];
         $array[0]=['id_beneficiario'=>$beneficiario->id_beneficiario, 'porcentaje' => $request->porcentaje];
        
         $ahorro->beneficiarios()->attach($array);

        return  back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Beneficiario::destroy($id); 
        return back();
    }
}
