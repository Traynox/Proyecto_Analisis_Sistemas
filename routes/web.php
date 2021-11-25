<?php

use Illuminate\Support\Facades\Route;

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

