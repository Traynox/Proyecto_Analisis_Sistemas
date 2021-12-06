<?php

namespace App\Http\Controllers;

use App\Models\Familiar;
use App\Models\Nacionalidad;
use App\Models\Identificacion;
use App\Models\Profesion;
use App\Models\Parentesco;
use App\Models\Estado;

use Illuminate\Http\Request;

class FamiliaresController extends Controller
{
    public function registrar_familiar(Request $request){

        $familiar = new Familiar;
        $familiar->cedula = $request->fcedula;
        $familiar->nombre_completo = $request->fnombre;
        $familiar->fecha_nacimiento = $request->fnacimiento;
        $familiar->direccion = $request->fdireccion;
        $familiar->telefono = $request->ftelefono;
        $familiar->celular = $request->fcelular;
        $familiar->correo = $request->fcorreo;
        $familiar->id_nacionalidad = $request->listaPaises;
        $familiar->id_identificacion = $request->listaIdentificaciones;
        $familiar->id_profesion = $request->listaProfesiones;
        $familiar->id_parentesco = $request->listaParentescos;
        $familiar->id_estado = $request->listaEstados;
        $familiar->save();
        return redirect()->route('cFamiliar');
        //return view('SAS.familiares.consultarFamiliares');
    }

    public function editar_familiar($id){

        $familiar = Familiar::findOrFail($id);
        return view('SAS.familiares.editFamiliar', compact('familiar'));
    }

    public function actualizar_familiar(Request $request, $id){

        $familiar = Familiar::find($id);
        $familiar->direccion = $request->fdireccion;
        $familiar->telefono = $request->ftelefono;
        $familiar->celular = $request->fcelular;
        $familiar->correo = $request->fcorreo;
        $familiar->id_nacionalidad = $request->listaPaises;
        $familiar->id_identificacion = $request->listaIdentificaciones;
        $familiar->id_profesion = $request->listaProfesiones;
        $familiar->id_parentesco = $request->listaParentescos;
        $familiar->id_estado = $request->listaEstados;
        $familiar->save();
        return view('SAS.familiares.consultarFamiliares');
    }

    public function consultar_familiar(){
        $familiares = Familiar::all();
        $nacionalidades = Nacionalidad::all();
        $identificaciones = Identificacion::all();
        $profesiones = Profesion::all();
        $parentescos = Parentesco::all();
        $estados = Estado::all();
        return view('SAS.familiares.consultar_familiar', compact('familiares', 'nacionalidades', 'identificaciones', 'profesiones', 'parentescos', 'estados'));

    }


}
