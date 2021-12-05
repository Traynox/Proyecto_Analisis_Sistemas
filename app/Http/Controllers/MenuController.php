<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function cargar_menu(){
        return view('SAS.menuSAS');
    }

    public function vista_nacionalidades(){
        return view('SAS.nacionalidades.gestionNac');
    }

    public function vista_identificaciones(){
        return view('SAS.tipos_id.gestionIDs');
    }

    public function vista_profesiones(){
        return view('SAS.profesiones.gestionProfesiones');
    }

    public function vista_estados(){
        return view('SAS.estados.gestionEstados');
    }

    public function vista_estado_Civiles(){
        return view('SAS.estado_civil.gestionECivil');
    }

    public function vista_parentescos(){
        return view('SAS.parentescos.gestionParentescos');
    }

    public function vista_familiares(){
        return view('SAS.familiares.registrarFamiliar');
    }

    public function vista_beneficiarios(){
        return view('SAS.beneficiarios.beneficiarios');
    }

}
