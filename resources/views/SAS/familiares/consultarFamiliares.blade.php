@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
    {{'Consultar Familiares'}}
@endsection


@section('contenido')

    @section('titulo-contenido')
        <div class="col-7">
            <div id="perfil-img"><i class="fas fa-users"></i></div>
            <h1 class="mx-5 my-3">Consultar Familiares</h1>
        </div>
    @endsection

    <div class="container-fluid">

        <div class="row">

            <div class="col-12" id="lista-paises">
    
                <table id="example" class="table table-striped table-light" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>F.Nacimiento</th>
                            <th>Direccion</th>
                            <th>Nacionalidad</th>
                            <th>Tipo-ID</th>
                            <th>Telefono</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th>Profesion</th>
                            <th>Parentesco</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($familiares as $item)
                        <tr>
                            <td>{{$item->id_familiar}}</td>
                            <td>{{$item->cedula}}</td>
                            <td>{{$item->nombre_completo}}</td>
                            <td>{{$item->fecha_nacimiento}}</td>
                            <td>{{$item->direccion}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->celular}}</td>
                            <td>{{$item->correo}}</td>
                            <td>{{$item->id_nacionalidad}}</td>
                            <td>{{$item->id_identificacion}}</td>
                            <td>{{$item->id_profesion}}</td>
                            <td>{{$item->id_parentesco}}</td>
                            <td>{{$item->id_estado}}</td>
                            <td>
                                <a href="{{ route('editFamiliar', $item) }}" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
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