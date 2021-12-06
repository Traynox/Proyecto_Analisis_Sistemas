<?php

namespace App\Http\Controllers;

use App\Models\Parentesco;
use Illuminate\Http\Request;

class ParentescoController extends Controller
{
    public function registrar_parentesco(Request $request){

        $parentesco = new Parentesco();
        $parentesco->nombre = $request->nParentesco;
        $parentesco->save();
        return redirect()->route('vParentescos');
    }

    public function editar_parentesco($id){

        $parentesco = Parentesco::findOrFail($id);
        return view('SAS.parentescos.editParentesco', compact('parentesco'));
    }

    public function actualizar_parentesco(Request $request, $id){

        $parentesco = Parentesco::find($id);
        $parentesco->nombre = $request->parentescoName;
        $parentesco->save();
        return redirect()->route('vParentescos');
    }

}
