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
/* NO TOCAR ESTA RUTA */
Route::get('/', function () {
    return view('plantilla');
});


Route::get('/instituciones', function () {
    return view('SCA.view_SCA');
})->name('instituciones');


Route::get('/planillas', function () {
    return view('SCA.instituciones.registrar_planilla');
})->name('PLANILLAS');


Route::get('/asociados-por-institucion', function () {
    return view('SCA.instituciones.view_asociados');
})->name('asociados_por_institucion');


Route::get('/reportes-otros', function () {
    return view('SCA.otros_reportes');
})->name('reportes-extra');


/* PARA OBTENER LISTA DE INSTITUCIONES */
Route::get('PDF-INSTITUCIONES', 'App\Http\controllers\PDFController@lista_instituciones')->name('li_ins');

/* PARA OBTENER LISTA DE EMPLEADOS DE X INSTITUCION */
Route::get('/PDF-EMPLEADOS', 'App\Http\controllers\PDFController@empleados_por_institucion')->name('emp_ins');

/* PARA OBTENER LISTA DE CAJAS DE LA INSTITUCION */
Route::get('/PDF-CAJEROS', 'App\Http\controllers\PDFController@lista_cajeros')->name('li_caj');

/* PARA OBTENER LISTA DE CAJAS DE LA INSTITUCION */
Route::get('/PDF-ESTADO-CAJAS', 'App\Http\controllers\PDFController@estado_cajas')->name('estado_cajas');