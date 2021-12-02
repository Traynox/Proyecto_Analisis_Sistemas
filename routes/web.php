<?php

use App\Http\Controllers\LineaCreditoController;
use App\Models\LineaCredito;
use Illuminate\Support\Facades\Auth;
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

/* --------------------------------SAS--------------------------------*/

/* Route::get('/inicio', function () {
    return view('plantilla');
}); */

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

/* --------------------------------SPR--------------------------------*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/lineaCredito', [LineaCreditoController::class, 'index'])->name('Lineascreditos');
Route::get('/nuevaLineaCredito', [LineaCreditoController::class, 'create'])->name('nuevaLineascreditos');
Route::post('/crearLineaC', [LineaCreditoController::class, 'store'])->name('crearLinea');
Route::delete('/eliminarLineaC/{id_linea_credito}', [LineaCreditoController::class, 'delete'])->name('eliminarLinea');


Route::get('/desembolso', function () {
    return view('SPR.LineaCredito.vistaDesembolso');
});

Route::get('/editarLineaCredito', function () {
    return view('SPR.LineaCredito.editarLineaCredito');
});

Route::get('/reportes', function () {
    return view('SPR.Reportes.reportesSPR');
});

Route::get('/arregloPago', function () {
    return view('SPR.Arreglos.arregloPago');
});

Route::get('/cobroJudicial', function () {
    return view('SPR.Arreglos.cobroJudicial');
});

Route::get('/historialPago', function () {
    return view('SPR.Arreglos.historialDePago');
});

Route::get('/tabladePago', function () {
    return view('SPR.Arreglos.tablaDePago');
});

Route::get('/solicitud', function () {
    return view('SPR.CreditosYGarantias.solicitudCredito');
});

Route::get('/prestamosDoc', function () {
    return view('SPR.CreditosYGarantias.prestamosSobreDoc');
});

Route::get('/garantiasTasas', function () {
    return view('SPR.CreditosYGarantias.gestionGarantiasTasas');
});

