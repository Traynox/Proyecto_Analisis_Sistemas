@extends('plantilla')
@section('titulo')
    reportes transacciones de cuenta
@endsection
@section('css')
    
@endsection
@section('contenido')
   
    <div class="container">
        <h3>Reporte de transacciones de cuenta</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cuenta del asociado</h5>
              
                    <form action="{{route('pdf.reporte_9_14')}}" class="form-group" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="cuenta" class="form-control" placeholder="cuenta">

                            {{-- inicio --}}
                            <div class="my-3">
                                <p class="card-text">Tipo de ahorro</p>
                                <select class="form-control" name="tipo_ahorro">

                                @forelse ($tipos_ahorros as $tipo)
                                <option value="{{$tipo->id_tipo_ahorro}}">{{$tipo->nombre}}</option> 
                                @empty
                                <option>No hay tipos de ahorros</option> 
                                @endforelse

                                </select>
                            </div>
                         
                            {{-- fin --}}
                        </div>
                       
                    <div class="d-flex justify-content-center">
                        <a href="{{route('reportes.index')}}" class="btn btn-danger btn-lg my-2 mr-4">Volver</a>
                        <button type="submit" class="btn btn-primary btn-lg my-2">Generar reporte</button>
                     
                    </div>
                
                </form>
               
            </div>
        </div>

    </div>
@endsection