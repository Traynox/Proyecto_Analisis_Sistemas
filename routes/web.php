<?php

use App\Http\Controllers\GarantiaController;
use App\Http\Controllers\LineaCreditoController;
use App\Http\Controllers\SolicitudController;
use App\Models\LineaCredito;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TipoAhorroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AhorrosController;
use App\Http\Controllers\AutorizadosController;
use App\Http\Controllers\BeneficiariosController;
use App\Http\Controllers\CertificadosController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\TasaInteresController;

use App\Http\Controllers\PaisesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\IdentificacionesController;
use App\Http\Controllers\ProfesionesController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\EstadoCivilController;
use App\Http\Controllers\FamiliaresController;
use App\Http\Controllers\HomeController;
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

/* --------------------------------SPR--------------------------------*/

Auth::routes();
Route::get('/', function () {
    return view('auth.login');
})->name('inicio');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('ahorros', AhorrosController::class); //Controlador de SAH
Route::resource('ahorros/autorizados', AutorizadosController::class); //Controlador de SAH
Route::resource('ahorros/beneficiarios', BeneficiariosController::class); //Controlador de SAH

/* --------------------------------SAS--------------------------------*/

/* Route::get('/inicio', function () {
/* NO TOCAR ESTA RUTA 
Route::get('/', function () {
    return view('plantilla');
}); 
*/
Route::resource('tipos_ahorros',TipoAhorroController::class);
Route::resource('tasa_interes', TasaInteresController::class);
Route::resource('certificados',CertificadosController::class);

// REPORTES
Route::get('reportes-ahorros', [ReportesController::class,'index'])->name('reportes.index');

Route::post('reportes-ahorros/reporte-9-1',[ReportesController::class,'reporte_9_1'])->name('pdf.reporte_9_1');
Route::post('reportes-ahorros/reporte-9-2',[ReportesController::class,'reporte_9_2'])->name('pdf.reporte_9_2');
Route::post('reportes-ahorros/reporte-9-4',[ReportesController::class,'reporte_9_4'])->name('pdf.reporte_9_4');
Route::post('reportes-ahorros/reporte-9-14',[ReportesController::class,'reporte_9_14'])->name('pdf.reporte_9_14');

Route::get('reportes-ahorros/reporte-9-1',[ReportesController::class,'vistaReporte_9_1'])->name('show.reporte_9_1');
Route::get('reportes-ahorros/reporte-9-2',[ReportesController::class,'vistaReporte_9_2'])->name('show.reporte_9_2');
Route::get('reportes-ahorros/reporte-9-4',[ReportesController::class,'vistaReporte_9_4'])->name('show.reporte_9_4');
Route::get('reportes-ahorros/reporte-9-14',[ReportesController::class,'vistaReporte_9_14'])->name('show.reporte_9_14');


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

Route::get('/crearGarantiasTasas', [GarantiaController::class, 'create'])->name('garantias');
Route::get('/garantiasTasas', [GarantiaController::class, 'index'])->name('vistaGarantias');
Route::post('/crearGarantiasTasas', [GarantiaController::class, 'store'])->name('crearGarantiasTasas');
Route::get('/descargarDoc/{id_garantia}', [GarantiaController::class, 'descargarDoc'])->name('descargarDoc');
Route::delete('/eliminarG/{id_garantia}', [GarantiaController::class, 'deleteG'])->name('eliminarG');
Route::delete('/eliminarT/{id_tasa}', [GarantiaController::class, 'deleteT'])->name('eliminarT');
Route::get('/editGarantia_{id_garantia}', [GarantiaController::class, 'edit_G'])->name('editGarantia');
Route::get('/editTasa_{id_tasa}', [GarantiaController::class, 'edit_T'])->name('editTasa');
Route::put('/updateGarantia/{id_garantia}', [GarantiaController::class, 'updateG'])->name('updateGarantia');
Route::put('/updateTasa/{id_tasa}', [GarantiaController::class, 'updateT'])->name('updateTasa');



Route::get('/SPR', [SolicitudController::class, 'indexPrestamos'])->name('prestamos');

Route::get('/reportePDF', [LineaCreditoController::class, 'pdf'])->name('generarPDF');
Route::get('/ArregloPDF', [LineaCreditoController::class, 'pdfArreglo'])->name('pdf_Arreglo');
Route::get('/CobroPDF', [LineaCreditoController::class, 'pdfCobro'])->name('pdf_Cobro');
Route::get('/notificaciones', function () {
    return view('SCA.notificaciones.gestionar_notificaciones');
})->name('notificaciones');

Route::get('/instituciones', function () {
    return view('SCA.view_SCA');
})->name('instituciones');


Route::get('/planillas', function () {
    return view('SCA.instituciones.registrar_planilla');
})->name('PLANILLAS');

Route::get('/pagos-pendientes', function () {
    return view('SCA.instituciones.aplicar_pago');
})->name('PAGOS_PLANILLAS');

Route::get('/asociados-por-institucion', function () {
    return view('SCA.instituciones.view_asociados');
})->name('asociados_por_institucion');

Route::get('/menuSAS', [MenuController::class, 'cargar_menu'])->name('menu_sas');

Route::get('/nacionalidades', [MenuController::class, 'vista_nacionalidades'])->name('vNacionalidades');
Route::post('/nacionalidades/registrar', [PaisesController::class, 'registrar_pais'])->name('rPais');
Route::get('/nacionalidades/editNac/{id}', [PaisesController::class, 'editar_pais'])->name('editPais');
Route::put('/nacionalidades/editNac/{id}', [PaisesController::class, 'actualizar_pais'])->name('actPais');


Route::get('/identificaciones', [MenuController::class, 'vista_identificaciones'])->name('vIdentificaciones');
Route::post('/identificaciones/registrar', [IdentificacionesController::class, 'registrar_tipo_id'])->name('rTipoId');
Route::get('/identificaciones/editID/{id}', [IdentificacionesController::class, 'editar_identificacion'])->name('editID');
Route::put('/identificaciones/editID/{id}', [IdentificacionesController::class, 'actualizar_identificacion'])->name('actID');


Route::get('/profesiones', [MenuController::class, 'vista_profesiones'])->name('vProfesiones');
Route::post('/profesiones/registrar', [ProfesionesController::class, 'registrar_profesion'])->name('rProfesion');
Route::get('/profesiones/editProfesion/{id}', [ProfesionesController::class, 'editar_profesion'])->name('editProfesion');
Route::put('/profesiones/editProfesion/{id}', [ProfesionesController::class, 'actualizar_profesion'])->name('actProfesion');



Route::get('/estados', [MenuController::class, 'vista_estados'])->name('vEstados');
Route::post('/estados/registrar', [EstadosController::class, 'registrar_estado'])->name('rEstado');
Route::get('/estados/editEstado/{id}', [EstadosController::class, 'editar_estado'])->name('editEstado');
Route::put('/estados/editEstado/{id}', [EstadosController::class, 'actualizar_estado'])->name('actEstado');


Route::get('/estadoCivil', [MenuController::class, 'vista_estado_Civiles'])->name('vECiviles');
Route::post('estadoCivil/registrar', [EstadoCivilController::class, 'registrar_estado_civil'])->name('rECivil');
Route::get('estadoCivil/editECivil/{id}', [EstadoCivilController::class, 'editar_estado_civil'])->name('editECivil');
Route::put('estadoCivil/editECivil/{id}', [EstadoCivilController::class, 'actualizar_estado_civil'])->name('actECivil');


Route::get('/parentescos', [MenuController::class, 'vista_parentescos'])->name('vParentescos');
Route::post('/parentescos/registrar', [ParentescoController::class, 'registrar_parentesco'])->name('rParentesco');
Route::get('/parentescos/editParentesco/{id}', [ParentescoController::class, 'editar_parentesco'])->name('editParentesco');
Route::put('/parentescos/editParentesco/{id}', [ParentescoController::class, 'actualizar_parentesco'])->name('actParentesco');



Route::get('/familiares', [MenuController::class, 'vista_familiares'])->name('vFamiliares');
Route::get('/familiares/consultar', [FamiliaresController::class, 'consultar_familiar'])->name('cFamiliar');
Route::post('/familiares/registrar', [FamiliaresController::class, 'registrar_familiar'])->name('rFamiliar');
Route::get('/familiares/editFamiliar/{id}', [FamiliaresController::class, 'editar_familiar'])->name('editFamiliar');
Route::put('/familiares/editFamiliar/{id}', [FamiliaresController::class, 'actualizar_familiar'])->name('actFamiliar');



Route::get('/beneficiarios', [MenuController::class, 'vista_beneficiarios'])->name('vBeneficiarios');

Route::get('/SAS', function () {
    return view('SAS.indexSAS');
});

Route::get('/reportes-otros', function () {
    return view('SCA.otros_reportes');
})->name('reportes-extra');


/* PARA PDF */
/* PARA OBTENER LISTA DE INSTITUCIONES */
Route::get('PDF-INSTITUCIONES', 'App\Http\controllers\PDFController@lista_instituciones')->name('li_ins');

/* PARA OBTENER LISTA DE EMPLEADOS DE X INSTITUCION */
Route::get('/PDF-EMPLEADOS', 'App\Http\controllers\PDFController@empleados_por_institucion')->name('emp_ins');
/*
Route::get('/actualizarNac', function () {
    return view('SAS.nacionalidades.editNac');
});
*/


/* PARA OBTENER LISTA DE CAJAS DE LA INSTITUCION */
Route::get('/PDF-CAJEROS', 'App\Http\controllers\PDFController@lista_cajeros')->name('li_caj');

/* PARA OBTENER LISTA DE CAJAS DE LA INSTITUCION */
Route::get('/PDF-ESTADO-CAJAS', 'App\Http\controllers\PDFController@estado_cajas')->name('estado_cajas');

/* PARA OBTENER LISTA DE NOTIFICACIONES QUE SE ENV??AN EN LA COMPA??IA*/
Route::get('/PDF-LISTA-NOTIFICACIONES', 'App\Http\controllers\PDFController@lista_notificaciones')->name('lis_noti');
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


Route::post('ahorros/monto',[AhorrosController::class,'monto_ahorro'])->name('monto.actu');
