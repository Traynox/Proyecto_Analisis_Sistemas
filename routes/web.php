<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaisesController;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('plantilla');
});

Route::get('/menuSAS', [MenuController::class, 'cargar_menu'])->name('menu_sas');
Route::get('/menu-nac', [MenuController::class, 'vista_nacionalidades'])->name('vNacionalidades');
Route::get('/menu-ids', [MenuController::class, 'vista_identificaciones'])->name('vIdentificaciones');
Route::get('/menu-prof', [MenuController::class, 'vista_profesiones'])->name('vProfesiones');
Route::get('/menu-estados', [MenuController::class, 'vista_estados'])->name('vEstados');
Route::get('/menu-eciviles', [MenuController::class, 'vista_estado_Civiles'])->name('vECiviles');
Route::get('/menu-parent', [MenuController::class, 'vista_parentescos'])->name('vParentescos');
Route::get('/menu-fam', [MenuController::class, 'vista_familiares'])->name('vFamiliares');
Route::get('/menu-benef', [MenuController::class, 'vista_beneficiarios'])->name('vBeneficiarios');

Route::get('/SAS', function () {
    return view('SAS.indexSAS');
});

Route::get('/registrar', function () {
    return view('SAS.registrarSAS');
});

Route::get('/nacionalidades', function () {
    return view('SAS.nacionalidades.gestionNac');
});

Route::get('/actualizarNac', function () {
    return view('SAS.nacionalidades.editNac');
});

Route::get('/identificaciones', function () {
    return view('SAS.tipos_id.gestionIDs');
});

Route::get('/actualizarTID', function () {
    return view('SAS.tipos_id.editTipoID');
});

Route::get('/estadoCivil', function () {
    return view('SAS.estado_civil.gestionECivil');
});

Route::get('/actualizarECivil', function () {
    return view('SAS.estado_civil.editECivil');
});

Route::get('/estados', function () {
    return view('SAS.estados.gestionEstados');
});

Route::get('/actualizarEstado', function () {
    return view('SAS.estados.editEstados');
});

Route::get('/profesiones', function () {
    return view('SAS.profesiones.gestionProfesiones');
});

Route::get('/actualizarProfesion', function () {
    return view('SAS.profesiones.editProfesion');
});

Route::get('/parentescos', function () {
    return view('SAS.parentescos.gestionParentescos');
});

Route::get('/actualizarParentesco', function () {
    return view('SAS.parentescos.editParentesco');
});

Route::get('/familiares', function () {
    return view('SAS.familiares.registrarFamiliar');
});

Route::get('/consultarFamiliares', function () {
    return view('SAS.familiares.consultarFamiliares');
});

Route::get('/actualizarFamiliares', function () {
    return view('SAS.familiares.editFamiliar');
});

Route::get('/aportes', function () {
    return view('SAS.aportes_capital_social.aportes');
});

Route::get('/actualizarAportes', function () {
    return view('SAS.aportes_capital_social.editAporte');
});

Route::get('/beneficiarios', function () {
    return view('SAS.beneficiarios.beneficiarios');
});

Route::get('/consultarBnfrs', function () {
    return view('SAS.beneficiarios.consultarbnfrs');
});

Route::get('/actualizarBnfrs', function () {
    return view('SAS.beneficiarios.editBeneficiarios');
});



