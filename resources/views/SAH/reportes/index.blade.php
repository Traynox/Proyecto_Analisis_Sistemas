@extends('plantilla')
@section('titulo')
    reportes-ahorros
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/reportes/cssIndex.css')}}">    
@endsection

@section('contenido')

<div class="container">
        <h5  class="text-center">Reportes</h5>
        <div class="row my-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{route('show.reporte_9_1')}}">Asociados y beneficiarios</a></h5>
                        <p class="card-text">Reporte de ahorro con beneficiarios y asociados</p>
                    </div>
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{route('show.reporte_9_2')}}">Bloqueos por cuenta</a></h5>
                        <p class="card-text">Reporte de penalizaciones por cuenta de ahorro</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                            <h5 class="card-title"><a href="{{route('show.reporte_9_14')}}">Transacciones de cuentas</a></h5>
                            <p class="card-text">Reporte de transacciones de cuentas ahorro</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{route('show.reporte_9_4')}}">Cuentas de asociado</a></h5>
                        <p class="card-text">Reporte de cuentas del asociado</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Proyecciones por cuenta</a></h5>
                        <p class="card-text">Reportes de proyecciones de cuenta</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Rangos para cálculo de intereses</a></h5>
                        <p class="card-text">reportes de intreses por rango</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Certificados Cancelados</a></h5>
                        <p class="card-text">certificados cancelados por asociado</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Vencimiento de certificados y cupones</a></h5>
                        <p class="card-text">reportes de vencimiento</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- FIN CONTAINER --}}
    </div>

@endsection