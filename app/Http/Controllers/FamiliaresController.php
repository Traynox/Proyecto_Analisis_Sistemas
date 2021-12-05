<?php

namespace App\Http\Controllers;

use App\Models\Familiar;
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
        return redirect()->route('');
    }
}
