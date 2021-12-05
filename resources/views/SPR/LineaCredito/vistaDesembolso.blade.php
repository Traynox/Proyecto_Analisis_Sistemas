@extends('plantilla')
@section('css')
    <link rel="stylesheet" href="css/cssLineaCredito.css">
@endsection
@section('contenido')
    
<div class="form-body-Desem">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Desembolso</h3>
                    <div class="d-inline">Monto actual:</div>
                    <div class="d-inline" style="color: green">{{$lineaCredito->monto}}</div> 
                    <p>Ingrese la cantidad de dinero a desembolsar</p>              
                                 
                    <form class="requires-validation" action="{{route('desembolsar', $lineaCredito)}}" method="POST">
                        @method('PUT')
                        @csrf
                     <div class="col-md-12 mt-3">
                        <input class="form-control" type="number" name="montoDesembolso" placeholder="Monto a desembolsar" required>
                     </div>
                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Desembolsar</button>
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