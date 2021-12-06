<?php

use App\Http\Controllers\TipoAhorroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AhorrosController;
use App\Http\Controllers\AutorizadosController;
use App\Http\Controllers\CertificadosController;
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

Route::get('/', function () {
    return view('plantilla');
});

Route::resource('tipos_ahorros',TipoAhorroController::class);
Route::resource('certificados',CertificadosController::class);
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

