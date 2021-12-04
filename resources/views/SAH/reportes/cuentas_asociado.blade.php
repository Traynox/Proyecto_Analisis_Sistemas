@extends('plantilla')
@section('titulo')
    reportes cuentas de asociado
@endsection
@section('css')
    
@endsection
@section('contenido')
    
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cédula del asociado</h5>
              
                    <form action="{{route('pdf.reporte_9_8')}}" class="form-group" method="POST">
                        @csrf
                    <input type="text" name="cedula" class="form-control" placeholder="Cédula" required>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('reportes.index')}}" class="btn btn-danger my-2 mr-4">Volver</a>
                        <button type="submit" class="btn btn-primary my-2">Generar reporte</button>
                     
                    </div>
                
                </form>
               
            </div>
        </div>

    </div>
@endsection