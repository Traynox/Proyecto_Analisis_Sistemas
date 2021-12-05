@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
    {{'Gestion de Nacionalidades'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
        <div class="col-8">
            <div id="perfil-img"><i class="far fa-flag"></i></div>
            <h1 class="mx-5 my-3">Gestion de Nacionalidades</h1>
        </div>
    @endsection

    <div class="container-fluid">

        <div class="row">

            <div class="col-3 mx-auto" id="reg-paises">

                <form action="{{ route('rPais') }}" method="POST" class="pt-3 pb-3">
                    @csrf
                    <h3>Registrar Pais</h3>

                    <div class="mb-3">
                        <label for="abrev-nac" class="form-label">Abreviatura</label>
                        <input type="text" class="form-control" name="abrevNac" id="exampleFormControlInput1" placeholder="Abreviatura Pais">
                    </div>

                    <div class="mb-3">
                        <label for="pais-nac" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="paisNac" id="exampleFormControlInput1" placeholder="Nombre Pais">
                    </div>

                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>

                </form>
    
            </div>
    
            <div class="col-8 mx-auto" id="lista-paises">
    
                <table id="example" class="table table-striped table-light" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Abreviatura</th>
                            <th>Pais</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($nacionalidades as $nac)
                        <tr>
                            <td>{{$nac->id_nacionalidad}}</td>
                            <td>{{$nac->abreviatura}}</td>
                            <td>{{$nac->pais}}</td>
                            
                            <td>
                                <a href="{{ route('editPais', $nac) }}" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
                                  <form action="" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                  </form> 
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
              
                </table>
                
            </div>

        </div>

    </div>

@endsection

@section('js')
<script src="{{ asset('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js') }}"></script>
@endsection