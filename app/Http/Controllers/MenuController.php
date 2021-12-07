<?php

namespace App\Http\Controllers;

use App\Models\Identificacion;
use Illuminate\Http\Request;
use App\Models\Nacionalidad;
use App\Models\Profesion;
use App\Models\Estado;
use App\Models\EstadoCivil;
use App\Models\Familiar;
use App\Models\Parentesco;

class MenuController extends Controller
{
    public function cargar_menu(){
        return view('SAS.menuSAS');
    }

    public function vista_nacionalidades(){        
        $nacionalidades = Nacionalidad::all();        
        return view('SAS.nacionalidades.gestionNac', compact('nacionalidades'));
    }

    public function vista_identificaciones(){
        $identificaciones = Identificacion::all();        
        return view('SAS.tipos_id.gestionIDs', compact('identificaciones'));
    }

    public function vista_profesiones(){
        $profesiones = Profesion::all();
        return view('SAS.profesiones.gestionProfesiones', compact('profesiones'));
    }

    public function vista_estados(){
        $estados = Estado::all();
        return view('SAS.estados.gestionEstados', compact('estados'));
    }

    public function vista_estado_Civiles(){
        $estados_civiles = EstadoCivil::all();
        return view('SAS.estado_civil.gestionECivil', compact('estados_civiles'));
    }

    public function vista_parentescos(){
        $parentescos = Parentesco::all();
        return view('SAS.parentescos.gestionParentescos', compact('parentescos'));
    }

    /*
    public function vista_familiares(){
        $familiares = Familiar::all();
        $nacionalidades = Nacionalidad::all();
        $identificaciones = Identificacion::all();
        $profesiones = Profesion::all();
        $parentescos = Parentesco::all();
        $estados = Estado::all();
        return view('SAS.familiares.registrarFamiliar', compact('familiares', 'nacionalidades', 'identificaciones', 'profesiones', 'parentescos', 'estados'));
    }
    */
    
    

    public function vista_beneficiarios(){
        return view('SAS.beneficiarios.beneficiarios');
    }

}
