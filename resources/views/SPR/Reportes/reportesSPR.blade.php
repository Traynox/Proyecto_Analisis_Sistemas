@extends('plantilla')
@section('css')
    <link rel="stylesheet" href="css/cssLineaCredito.css">
@endsection
@section('contenido')
    
<div class="form-body-prestamos">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Reportes</h3>
                    <p>Busque el reporte que desea</p>
                    <form class="requires-validation" novalidate>

                    <div class="col-md-12">
                           <input class="form-control" type="text" name="numeroIdentificacion" placeholder="# identificación" required>
                           <div class="valid-feedback">Username field is valid!</div>
                           <div class="invalid-feedback">Username field cannot be blank!</div>
                        </div>


                    <div class="col-md-12">
                            <select class="form-select mt-3" required>
                                  <option selected disabled value="">Tipo de Reporte</option>
                                  <option value="jweb">Analisis de asociado</option>
                                  <option value="sweb">Arreglos de pago</option>
                                  <option value="sweb">Anexos</option>
                                  <option value="sweb">INS Autorizacion</option>
                                  <option value="sweb">Calificacion de deudores</option>
                                  <option value="sweb">Total de cargos por prestamo</option>
                                  <option value="sweb">Certificaciones</option>
                                  <option value="sweb">Clasificado de creditos</option>
                                  <option value="sweb">Detalles de gastos</option>
                                  <option value="sweb">Fianzas vigentes</option>
                                  <option value="sweb">Letra de cambio</option>
                                  <option value="sweb">Morosidad</option>
                                  <option value="sweb">Cobro judicial</option>
                                  <option value="sweb">Polizas Generadas</option>
                                  <option value="sweb">Polizas Generadas</option>
                                  <option value="sweb">Pagare</option>
                                  <option value="sweb">Plazo por tipo</option>
                                  <option value="sweb">Prestamos activos</option>
                                  <option value="sweb">Procedencia de fondos</option>
                                  <option value="sweb">Solicitud de credito</option>
                                  <option value="sweb">Tablas de pago</option>
                                  <option value="sweb">Tipos de cargos</option>
                                  <option value="sweb">Transacciones por poliza</option>

                           </select>
                            <div class="valid-feedback">You selected a position!</div>
                            <div class="invalid-feedback">Please select a position!</div>
                       </div>
                  
                        <div class="form-button mt-3 text-center">
                            <a class="btn btn-danger" href="{{route('generarPDF')}}">Generar PDF</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
@section('js')
    
@endsection