<?php

use App\Http\Controllers\LineaCreditoController;
use App\Http\Controllers\SolicitudController;
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

Route::get('/reportesSPR', function () {
    return view('SPR.Reportes.reportesSPR');
})->name('reportes_prestamos');

Route::get('/arregloPago', function () {
    return view('SPR.Arreglos.arregloPago');
})->name('arreglos');

Route::get('/cobroJudicial', function () {
    return view('SPR.Arreglos.cobroJudicial');
})->name('cobros');

Route::get('/historialPago', function () {
    return view('SPR.Arreglos.historialDePago');
})->name('historial');

Route::get('/tabladePago', function () {
    return view('SPR.Arreglos.tablaDePago');
})->name('tablasPagos');

Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('vistaSolicitudes');
Route::get('/solicitud', [SolicitudController::class, 'create'])->name('solicitudes');
Route::post('/crearSolicitud', [SolicitudController::class, 'store'])->name('crearSolicitud');
Route::delete('/eliminarSolicitud/{id_solicitud}', [SolicitudController::class, 'delete'])->name('eliminarSolicitud');
Route::get('/editSolicitud_{id_solicitud}', [SolicitudController::class, 'edit'])->name('editSolicitud');
Route::put('/updateSolicitud/{id_solicitud}', [SolicitudController::class, 'update'])->name('updateSolicitud');



Route::get('/prestamosDoc', function () {
    return view('SPR.CreditosYGarantias.prestamosSobreDoc');
})->name('documentos');

Route::get('/garantiasTasas', function () {
    return view('SPR.CreditosYGarantias.gestionGarantiasTasas');
})->name('garantias');

Route::get('/SPR', [SolicitudController::class, 'indexPrestamos'])->name('prestamos');

Route::get('/reportePDF', [LineaCreditoController::class, 'pdf'])->name('generarPDF');
