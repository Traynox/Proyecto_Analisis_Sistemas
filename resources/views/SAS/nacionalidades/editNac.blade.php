@extends('plantilla')

@section('css')

@endsection

@section('titulo')
    {{'Actualizar Nacionalidad'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
        <div class="col-8">
            <div id="perfil-img"><i class="far fa-flag"></i></div>
            <h1 class="mx-5 my-3">Actualizar Datos Nacionalidad</h1>
        </div>
    @endsection


    <div class="card">
        <div class="card-body">
            <div class="col-4 mx-auto" id="reg-paises">

                <form action="{{ route('actPais', $nacionalidad->id_nacionalidad) }}" method="POST" class="pt-3 pb-3">
                    @method('PUT')
                    @csrf
                    <h3 class="mb-4">Modificar Registro Pais</h3>

                    <div class="mb-3">
                        <label for="abrev-nac" class="form-label"><strong>Abreviatura</strong></label>
                        <input type="text" class="form-control" name="eabrevNac" id="exampleFormControlInput1" value="{{$nacionalidad->abreviatura}}">
                    </div>

                    <div class="mb-3">
                        <label for="pais-nac" class="form-label"><strong>Nombre</strong></label>
                        <input type="text" class="form-control" name="epaisNac" id="exampleFormControlInput1" value="{{$nacionalidad->pais}}">
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