@extends('plantilla')
@section('titulo')
    reportes autorizados y beneficiarios
@endsection
@section('css')
    
@endsection
@section('contenido')
    
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cuenta de asociado</h5>
              
                    <form action="{{route('consulta.reporte_9-1')}}" class="form-group" method="POST">
                        @csrf
                    <input type="text" name="cuenta_numero" class="form-control" placeholder="ingrese cuenta de asociado">
                </form>
               
            </div>
        </div>

    </div>
@endsection