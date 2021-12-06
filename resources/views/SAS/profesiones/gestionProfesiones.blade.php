@extends('plantilla')
@section('css')
    
@endsection

@section('titutlo')
    {{'Profesiones'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
    <div class="col-7">
        <div id="perfil-img"><i class="fas fa-toolbox"></i></div>
        <h1 class="mx-5 my-3">Gestion de Profesiones</h1>
    </div>
    @endsection

    <div class="container-fluid">

        <div class="row">

            <div class="col-6 mx-auto body-card" id="lista-paises">
    
                <table id="example" class="table table-striped table-light" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($profesiones as $item)
                        <tr>
                            <td>{{$item->id_profesion}}</td>
                            <td>{{$item->nombre}}</td>
                            
                            <td>
                                <a href="{{ route('editProfesion', $item) }}" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
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

            <div class="col-4 mx-auto card" id="reg-paises">

                <div class="card-body">

                    <form action="{{ route('rProfesion') }}" method="post" class="pt-3 pb-1">
                        @csrf
                        <h3>Registrar Profesion</h3>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la Profesion" name="nProfesion">
                        </div>
    
                        <div class="row justify-content-center mt-4">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
    
                    </form>

                </div>
    
            </div>

        </div>

    </div>
    
@endsection
@section('js')
<script src="{{ asset('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js') }}"></script>
@endsection