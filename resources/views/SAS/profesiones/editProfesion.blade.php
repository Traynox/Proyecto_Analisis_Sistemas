@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
    {{'Actualizar Profesion'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
        <div class="col-10">
            <div id="perfil-img"><i class="fas fa-toolbox"></i></div>
            <h1 class="mx-5 my-3">Actualizar Datos Profesion</h1>
        </div>
    @endsection


    <div class="card">
        <div class="card-body">
            <div class="col-6 mx-auto" id="reg-paises">

                <form action="{{ route('actProfesion', $profesion->id_profesion) }}" method="post" class="pt-3 pb-1">
                    @method('PUT')
                    @csrf
                    <h3>Actualizar Profesion</h3>

                    <div class="mb-3">
                        <label for="nProfesion" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$profesion->nombre}}" name="profesionName">
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