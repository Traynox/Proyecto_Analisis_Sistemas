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

}
