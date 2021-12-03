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

                <form action="" method="post" class="pt-3 pb-3">

                    <h3>Registrar Pais</h3>

                    <div class="mb-3">
                        <label for="abrev-nac" class="form-label">Abreviatura</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Abreviatura Pais">
                    </div>

                    <div class="mb-3">
                        <label for="pais-nac" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Pais">
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
                        
                        <tr>
                            <td>1</td>
                            <td>CR</td>
                            <td>Costa Rica</td>
                            
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
                            <td>NI</td>
                            <td>Nicaragua</td>
                            
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
                            <td>PA</td>
                            <td>Panama</td>
                            
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
                            <td>4</td>
                            <td>CA</td>
                            <td>Canada</td>
                            
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
                            <td>5</td>
                            <td>US</td>
                            <td>Estados Unidos</td>
                            
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
                            <td>6</td>
                            <td>UK</td>
                            <td>Reino Unido</td>
                            
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
                            <td>7</td>
                            <td>PE</td>
                            <td>Peru</td>
                            
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
                            <td>8</td>
                            <td>CL</td>
                            <td>Chile</td>
                            
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
                            <td>9</td>
                            <td>DO</td>
                            <td>Republica Dominicana</td>
                            
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
                            <td>10</td>
                            <td>ES</td>
                            <td>España</td>
                            
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
                            <td>11</td>
                            <td>MX</td>
                            <td>Mexico</td>
                            
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