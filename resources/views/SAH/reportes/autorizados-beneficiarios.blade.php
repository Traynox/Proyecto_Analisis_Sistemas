@extends('plantilla')
@section('titulo')
    reportes autorizados y beneficiarios
@endsection
@section('css')
    
@endsection
@section('contenido')
    
    <div class="container">
        <h3>Reportes de autorizados y beneficiarios por ahorro</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cuenta de asociado</h5>
              
                    <form action="{{route('pdf.reporte_9_1')}}" class="form-group" method="POST">
                        @csrf
                    <input type="text" name="nombre" class="form-control" placeholder="Cuenta ahorro" required>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('reportes.index')}}" class="btn btn-danger btn-lg my-2 mr-4">Volver</a>
                        <button type="submit" class="btn btn-primary btn-lg my-2">Generar reporte</button>
                     
                    </div>
                </form>
               
            </div>
        </div>

    </div>
@endsection