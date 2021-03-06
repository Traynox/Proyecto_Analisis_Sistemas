@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
    {{'Actualizar E. Civil'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
        <div class="col-8">
            <div id="perfil-img"><i class="fas fa-people-arrows"></i></div>
            <h1 class="mx-5 my-3">Actualizar Datos Estado Civil</h1>
        </div>
    @endsection

    <div class="card">
        <div class="card-body">
            <div class="col-4 mx-auto" id="reg-paises">

                <form action="{{ route('actECivil', $estado_civil->id_estado_civil) }}" method="post" class="pt-3 pb-1">
                    @method('PUT')
                    @csrf
                    <h3>Actualizar Estado Civil</h3>

                    <div class="mb-3">
                        <label for="e-civil" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$estado_civil->nombre}}" name="modEstadoCivil">
                    </div>

                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>

                </form>
    
            </div>
        </div>
    </div>

@endsection
@section('js')
    
@endsection