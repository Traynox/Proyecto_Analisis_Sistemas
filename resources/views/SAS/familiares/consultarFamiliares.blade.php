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
                        
                        <tr>
                            <td>1</td>
                            <td>305550111</td>
                            <td>Simone simons</td>
                            <td>17/01/1985</td>
                            <td>direccion provicional para pruebas</td>
                            <td>Holanda</td>
                            <td>Persona Fisica Residente</td>
                            <td>25318517</td>
                            <td>83196588</td>
                            <td>sjms85@gmail.com</td>
                            <td>Cantante</td>
                            <td>Conyugue</td>
                            <td>Activo</td>
                            <td>
                                <a href="" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
                                  <form action="" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                  </form> 
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>405950222</td>
                            <td>Mark Jensen</td>
                            <td>27/04/1995</td>
                            <td>direccion provicional para pruebas</td>
                            <td>Costa Rica</td>
                            <td>Persona Fisica Nacional</td>
                            <td>25617513</td>
                            <td>89151598</td>
                            <td>mrkj@gmail.com</td>
                            <td>Musico</td>
                            <td>Conyugue</td>
                            <td>Activo</td>
                            <td>
                                <a href="" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
                                  <form action="" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                  </form> 
                            </td>

                        </tr>

                        <tr>
                            <td>3</td>
                            <td>703130282</td>
                            <td>Anastasia Knight</td>
                            <td>12/08/1993</td>
                            <td>direccion provicional para pruebas</td>
                            <td>Costa Rica</td>
                            <td>Persona Fisica Nacional</td>
                            <td>25717213</td>
                            <td>88171593</td>
                            <td>anak@gmail.com</td>
                            <td>Medico</td>
                            <td>Nieto(a)</td>
                            <td>Activo</td>
                            <td>
                                <a href="" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
                                  <form action="" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                  </form> 
                            </td>

                        </tr>

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