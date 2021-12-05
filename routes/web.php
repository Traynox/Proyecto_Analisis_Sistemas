<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaisesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\IdentificacionesController;
use App\Http\Controllers\ProfesionesController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\EstadoCivilController;
use App\Http\Controllers\FamiliaresController;
use App\Http\Controllers\ParentescoController;


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

Route::get('/nacionalidades', [MenuController::class, 'vista_nacionalidades'])->name('vNacionalidades');
Route::post('/nacionalidades/registrar', [PaisesController::class, 'registrar_pais'])->name('rPais');
Route::get('/nacionalidades/editNac/{id}', [PaisesController::class, 'editar_pais'])->name('editPais');
Route::put('/nacionalidades/editNac/{id}', [PaisesController::class, 'actualizar_pais'])->name('actPais');



Route::get('/identificaciones', [MenuController::class, 'vista_identificaciones'])->name('vIdentificaciones');
Route::post('/identificaciones/registrar', [IdentificacionesController::class, 'registrar_tipo_id'])->name('rTipoId');


Route::get('/profesiones', [MenuController::class, 'vista_profesiones'])->name('vProfesiones');
Route::post('profesiones/registrar', [ProfesionesController::class, 'registrar_profesion'])->name('rProfesion');


Route::get('/estados', [MenuController::class, 'vista_estados'])->name('vEstados');
Route::post('/estados/registrar', [EstadosController::class, 'registrar_estado'])->name('rEstado');


Route::get('/estadoCivil', [MenuController::class, 'vista_estado_Civiles'])->name('vECiviles');
Route::post('estadoCivil/registrar', [EstadoCivilController::class, 'registrar_estado_civil'])->name('rECivil');


Route::get('/parentescos', [MenuController::class, 'vista_parentescos'])->name('vParentescos');
Route::post('/parentescos/registrar', [ParentescoController::class, 'registrar_parentesco'])->name('rParentesco');


Route::get('/familiares', [MenuController::class, 'vista_familiares'])->name('vFamiliares');
Route::post('/familiares/registrar', [FamiliaresController::class, 'registrar_familiar'])->name('rFamiliar');

Route::get('/beneficiarios', [MenuController::class, 'vista_beneficiarios'])->name('vBeneficiarios');

Route::get('/SAS', function () {
    return view('SAS.indexSAS');
});

Route::get('/registrar', function () {
    return view('SAS.registrarSAS');
});

/*
Route::get('/actualizarNac', function () {
    return view('SAS.nacionalidades.editNac');
});
*/


Route::get('/actualizarTID', function () {
    return view('SAS.tipos_id.editTipoID');
});

Route::get('/actualizarECivil', function () {
    return view('SAS.estado_civil.editECivil');
});

Route::get('/actualizarEstado', function () {
    return view('SAS.estados.editEstados');
});

Route::get('/actualizarProfesion', function () {
    return view('SAS.profesiones.editProfesion');
});

Route::get('/actualizarParentesco', function () {
    return view('SAS.parentescos.editParentesco');
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

Route::get('/consultarBnfrs', function () {
    return view('SAS.beneficiarios.consultarbnfrs');
});

Route::get('/actualizarBnfrs', function () {
    return view('SAS.beneficiarios.editBeneficiarios');
});


