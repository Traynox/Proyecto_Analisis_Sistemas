<?php

use App\Http\Controllers\LineaCreditoController;
use App\Http\Controllers\SolicitudController;
use App\Models\LineaCredito;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TipoAhorroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AhorrosController;
use App\Http\Controllers\AutorizadosController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\TasaInteresController;

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
Route::resource('ahorros', AhorrosController::class); //Controlador de SAH
Route::resource('ahorros/autorizados', AutorizadosController::class); //Controlador de SAH

/* --------------------------------SAS--------------------------------*/

/* Route::get('/inicio', function () {
    return view('plantilla');
}); */

Route::resource('tipos_ahorros',TipoAhorroController::class);
Route::resource('tasas_interes', TasaInteresController::class);


// REPORTES
Route::get('reportes', [ReportesController::class,'index'])->name('reportes.index');

Route::post('reportes/reporte-9-1',[ReportesController::class,'reporte_9_1'])->name('pdf.reporte_9_1');
Route::post('reportes/reporte-9-2',[ReportesController::class,'reporte_9_2'])->name('pdf.reporte_9_2');
Route::post('reportes/reporte-9-4',[ReportesController::class,'reporte_9_4'])->name('pdf.reporte_9_4');
Route::post('reportes/reporte-9-14',[ReportesController::class,'reporte_9_14'])->name('pdf.reporte_9_14');

Route::get('reportes/reporte-9-1',[ReportesController::class,'vistaReporte_9_1'])->name('show.reporte_9_1');
Route::get('reportes/reporte-9-2',[ReportesController::class,'vistaReporte_9_2'])->name('show.reporte_9_2');
Route::get('reportes/reporte-9-4',[ReportesController::class,'vistaReporte_9_4'])->name('show.reporte_9_4');
Route::get('reportes/reporte-9-14',[ReportesController::class,'vistaReporte_9_14'])->name('show.reporte_9_14');

/* --------------------------------SPR--------------------------------*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/lineaCredito', [LineaCreditoController::class, 'index'])->name('Lineascreditos');
Route::get('/nuevaLineaCredito', [LineaCreditoController::class, 'create'])->name('nuevaLineascreditos');
Route::post('/crearLineaC', [LineaCreditoController::class, 'store'])->name('crearLinea');
Route::delete('/eliminarLineaC/{id_linea_credito}', [LineaCreditoController::class, 'delete'])->name('eliminarLinea');
Route::get('/editarLineaCredito_{id_linea_credito}', [LineaCreditoController::class, 'edit'])->name('editarLineaC');
Route::put('/updateLinea/{id_linea_credito}', [LineaCreditoController::class, 'update'])->name('updateLinea');
Route::get('/desembolso_{id_linea_credito}', [LineaCreditoController::class, 'indexDesembol'])->name('desembolso');
Route::put('/desembolsar/{id_linea_credito}', [LineaCreditoController::class, 'desembolsar'])->name('desembolsar');


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
Route::get('/descargarCD/{id_solicitud}', [SolicitudController::class, 'descargarCD'])->name('descargarCD');
Route::get('/descargarCI/{id_solicitud}', [SolicitudController::class, 'descargarCI'])->name('descargarCI');
Route::get('/descargarCartaP/{id_solicitud}', [SolicitudController::class, 'descargarCartaP'])->name('descargarCartaP');
Route::get('/descargarHC/{id_solicitud}', [SolicitudController::class, 'descargarHC'])->name('descargarHC');



Route::get('/prestamosDoc', function () {
    return view('SPR.CreditosYGarantias.prestamosSobreDoc');
})->name('documentos');

Route::get('/garantiasTasas', function () {
    return view('SPR.CreditosYGarantias.gestionGarantiasTasas');
})->name('garantias');

Route::get('/SPR', [SolicitudController::class, 'indexPrestamos'])->name('prestamos');

Route::get('/reportePDF', [LineaCreditoController::class, 'pdf'])->name('generarPDF');
Route::get('/ArregloPDF', [LineaCreditoController::class, 'pdfArreglo'])->name('pdf_Arreglo');
Route::get('/CobroPDF', [LineaCreditoController::class, 'pdfCobro'])->name('pdf_Cobro');


