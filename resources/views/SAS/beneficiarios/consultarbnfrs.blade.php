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
            <h1 class="mx-5 my-3">Consultar Beneficiarios</h1>
        </div>
    @endsection

    <div class="container-fluid">

        <div class="row">

            <div class="col-12" id="lista-paises">
    
                <table id="example" class="table table-striped table-light" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre Completo</th>
                            <th>Detalle</th>
                            <th>Valor Beneficio</th>
                            <th>Cedula</th>
                            <th>Telefono</th>
                            <th>Celular</th>
                            <th>Direccion</th>
                            <th>Nacionalidad</th>
                            <th>Tipo-ID</th>
                            <th>Correo</th>
                            <th>parentesco</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>1</td>
                            <td>Nombre apellido1 apellido2</td>
                            <td>Descripcion del beneficio</td>
                            <td>₡150000</td>
                            <td>108520951</td>
                            <td>25561683</td>
                            <td>82660288</td>
                            <td>direccion beneficiario</td>
                            <td>Costarricense</td>
                            <td>Persona Fisica Nacional</td>
                            <td>nombre25@gmail.com</td>
                            <td>Hermano(a)</td>
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
                            <td>Nombre apellido1 apellido2</td>
                            <td>Descripcion del beneficio</td>
                            <td>₡250000</td>
                            <td>108520951</td>
                            <td>25562214</td>
                            <td>89130258</td>
                            <td>direccion beneficiario</td>
                            <td>Costarricense</td>
                            <td>Persona Fisica Nacional</td>
                            <td>nombre26@gmail.com</td>
                            <td>Padre</td>
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
                            <td>Angelica apellido1 apellido2</td>
                            <td>Descripcion del beneficio</td>
                            <td>₡350000</td>
                            <td>208320451</td>
                            <td>25561008</td>
                            <td>89170078</td>
                            <td>direccion beneficiario</td>
                            <td>Costarricense</td>
                            <td>Persona Fisica Nacional</td>
                            <td>nombre27@gmail.com</td>
                            <td>Madre</td>
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