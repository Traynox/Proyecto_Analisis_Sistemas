@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
    {{'Actualizar Tipo ID'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
        <div class="col-10">
            <div id="perfil-img"><i class="far fa-id-card"></i></div>
            <h1 class="mx-5 my-3">Actualizar Tipo de Identificacion</h1>
        </div>
    @endsection


    <div class="card">
        <div class="card-body">
            <div class="col-6 mx-auto" id="reg-paises">

                <form action="" method="post" class="pt-3 pb-1">
                    @csrf
                    <h3>Actualizar Tipo Indentificacion</h3>

                    <div class="mb-3">
                        <label for="tipo-id" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tipo de ID">
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