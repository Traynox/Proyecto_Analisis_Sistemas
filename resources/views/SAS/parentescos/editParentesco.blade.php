@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
    {{'Actualizar Parentesco'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
        <div class="col-10">
            <div id="perfil-img"><i class="fas fa-users"></i></div>
            <h1 class="mx-5 my-3">Actualizar Datos Parentesco</h1>
        </div>
    @endsection


    <div class="card">
        <div class="card-body">
            <div class="col-6 mx-auto" id="reg-paises">

                <form action="" method="post" class="pt-3 pb-1">
                    @csrf
                    <h3>Actualizar Parentesco</h3>

                    <div class="mb-3">
                        <label for="nParentesco" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Parentesco">
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