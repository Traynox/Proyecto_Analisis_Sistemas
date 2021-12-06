<?php

use App\Http\Controllers\TipoAhorroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AhorrosController;
use App\Http\Controllers\AutorizadosController;
use App\Http\Controllers\BeneficiariosController;
use App\Http\Controllers\ReportesController;

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
Route::resource('ahorros/beneficiarios', BeneficiariosController::class); //Controlador de SAH

Route::get('/', function () {
    return view('plantilla');
});

Route::resource('tipos_ahorros',TipoAhorroController::class);
Route::get('reportes', [ReportesController::class,'index'])->name('reportes.index');

Route::post('reportes/reporte-9-1',[ReportesController::class,'reporte_9_1'])->name('pdf.reporte_9_1');
Route::post('reportes/reporte-9-8',[ReportesController::class,'reporte_9_8'])->name('pdf.reporte_9_8');

Route::get('reportes/reporte-9-1',[ReportesController::class,'vistaReporte_9_1'])->name('show.reporte_9_1');
Route::get('reportes/reporte-9-8',[ReportesController::class,'vistaReporte_9_8'])->name('show.reporte_9_8');

