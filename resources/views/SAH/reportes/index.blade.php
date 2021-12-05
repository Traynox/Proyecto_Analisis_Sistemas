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
                        <h5 class="card-title">Asociados y beneficiarios</h5>
                        <p class="card-text">Content</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bloqueos de por cuenta</h5>
                        <p class="card-text">Content</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">certificados Cancelados</h5>
                        <p class="card-text">Content</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cuentas de asociado</h5>
                        <p class="card-text">Content</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- FIN CONTAINER --}}
    </div>

@endsection