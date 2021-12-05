@extends('plantilla')
@section('css')
    <link rel="stylesheet" href="css/cssLineaCredito.css">
@endsection

@section('titulo-contenido')
        @include('SPR.barranavegacion')
    @endsection

@section('contenido')
    
<div class="form-body-prestamos">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Arreglo de Pago</h3>
                    <p>Llene los datos correspondientes</p>
                    <form class="requires-validation" novalidate>

                    <div class="col-md-12 mt-1">
                           <input class="form-control" type="text" name="numeroIdentificacion" placeholder="# identificación" required>
                           <div class="valid-feedback">Username field is valid!</div>
                           <div class="invalid-feedback">Username field cannot be blank!</div>
                        </div>

                        <div class="col-md-12 mt-1">
                           <input class="form-control" type="number" name="montoAtrasado" placeholder="Monto Atrasado" required>
                           <div class="valid-feedback">Username field is valid!</div>
                           <div class="invalid-feedback">Username field cannot be blank!</div>
                        </div>

                        <div class="col-md-12 mt-1">
                           <input class="form-control" type="number" name="cuotaEstablecida" placeholder="Cuota Establecida para el Arreglo" required>
                           <div class="valid-feedback">Username field is valid!</div>
                           <div class="invalid-feedback">Username field cannot be blank!</div>
                        </div>

                        <div class="col-md-12 mt-1">
                           <input class="form-control" type="number" name="montoPendiente" placeholder="Monto Pendiente" required>
                           <div class="valid-feedback">Username field is valid!</div>
                           <div class="invalid-feedback">Username field cannot be blank!</div>
                        </div>

                        <div class="col-md-12 mt-1">
                           <input class="form-control" type="number" name="nuevaMensualidad" placeholder="Nueva Mensualidad" required>
                           <div class="valid-feedback">Username field is valid!</div>
                           <div class="invalid-feedback">Username field cannot be blank!</div>
                        </div>              

                        <div class="form-button mt-3 text-center">
                            <a class="btn btn-danger" href="{{route('pdf_Arreglo')}}">Generar PDF</a>
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