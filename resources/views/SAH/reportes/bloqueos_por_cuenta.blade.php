@extends('plantilla')
@section('titulo')
    reportes bloqueos de cuenta
@endsection
@section('css')
    
@endsection
@section('contenido')
   
    <div class="container">
        <h3>Reportes bloqueo de cuenta</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cuenta del asociado</h5>
              
                    <form action="{{route('pdf.reporte_9_2')}}" class="form-group" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="cuenta" class="form-control" placeholder="cuenta" required>

                            {{-- inicio --}}
                            <div class="my-3">
                                <label class="form-label">Fecha</label>
                                <input type="date" name="fecha" class="form-control" required>
                            </div>
                            <div class="my-3">
                                <label class="form-label">Estado de cuenta</label>

                                <div class="form-check" id="uno">
                                    <input class="form-check-input" type="radio" name="estado"
                                         value="1" checked>
                                    <label class="form-check-label" for="estado">
                                        Activo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado"
                                         value="0">
                                    <label class="form-check-label" for="estado">
                                        Inactivo
                                    </label>
                                </div>
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