@extends('plantilla')

@section('titulo')
    {{'Menu Asociados'}}
@endsection

@section('css')
    
@endsection
@section('contenido')

    @section('titulo-contenido')
        <div class="col-8">
            <div id="perfil-img"><i class="fas fa-folder-minus"></i></div>
            <h1 class="mx-5 my-3">Menu Funciones de Asociados</h1>
        </div>
    @endsection

    <div class="container-fluid">

        <div class="col-12 mx-auto">

                <div class="row  my-4">
                  <div class="col-10 mx-auto">
                    <a class="btn btn-outline-dark p-5 mx-3" style="width: 200px" href="{{ route('vNacionalidades') }}">Nacionalidades</a>
                    <a class="btn btn-outline-dark p-5 mx-3" style="width: 200px" href="{{ route('vIdentificaciones') }}">Identificaciones</a>
                    <a class="btn btn-outline-dark p-5 mx-3" style="width: 200px" href="{{ route('vProfesiones') }}">Profesiones</a>    
                  </div>                  
                </div>

                <div class="row my-4">
                    <div class="col-10 mx-auto">
                        <a class="btn btn-outline-dark p-5 mx-3" style="width: 200px" href="{{ route('vEstados') }}">Estados</a>
                        <a class="btn btn-outline-dark p-5 mx-3" style="width: 200px" href="{{ route('vECiviles') }}">Estado Civil</a>
                        <a class="btn btn-outline-dark p-5 mx-3" style="width: 200px" href="{{ route('vParentescos') }}">Parentescos</a>
                    </div>                  
                </div>

                <div class="row my-4">
                    <div class="col-10 mx-auto">
                        <a class="btn btn-outline-dark p-5 mx-3" style="width: 200px" href="{{ route('vFamiliares') }}">Familiares</a>
                        <a class="btn btn-outline-dark p-5 mx-3"  style="width: 200px" href="{{ route('vBeneficiarios') }}">Beneficiarios</a>
                        <a class="btn btn-outline-dark p-5 mx-3" style="width: 200px"  href="">Aportes</a>
                    </div>                  
                </div>
              
        </div>

    </div>


    
@endsection
@section('js')

@endsection