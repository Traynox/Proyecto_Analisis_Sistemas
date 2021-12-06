@extends('plantilla')
@section('css')
    
@endsection
@section('contenido')
  {{-- <div class=""  > --}}
    {{-- <div class="container"> --}}
      <div class="card">
        @include('SAH.ahorros.agregar_autorizado')
        @include('SAH.ahorros.agregar_beneficiario')
        <div class="card-header">
          <h5 class="card-title" >Agregar Autorizados y Beneficiarios</h5>
         
        </div>   
        <div class="card-body">
                <div class="row"> 
                    <div class="col-md-6 col-sm-12">
                      
                      <div class="card" style="width: 100%;">
                        <div class="card-header">
          
                            <i class="fas fa-table me-1"></i>
                            LISTA DE AUTORIZADOS
                            <button type="button" class="btn btn-primary btn-sm ml-5" data-toggle="modal"style="color:white;" data-target="#exampleModalCenternewCliente">
                              <i class="fas fa-plus" style="font-size:17px; color: rgb(185, 199, 242)"></i>
                              Agregar Autorizado
                            </button>
                        </div>
          
                        <div class="card-body">
                            <style>
                                #tablaAutorizados th {
                                    text-align: center;
                                    color: white;
                                }
          
                                #tablaAutorizados thead {
                                    background-color: rgb(128, 128, 128);
                                }
          
                                #tablaAutorizados {
                                    width: 100%;
                                }
          
                            </style>
          
                            <table class="table table-hover display" id="tablaAutorizados" >
                                <thead>
                                    <tr>
                                        <th>Cedula</th>
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Acciones</th>                
                                    </tr>
                                </thead>
                                <tbody>
          
                                    @if (isset($ahorro))
                                        @foreach ($ahorro->autorizados as $item)
          
                                            <tr class="text-center">

                                                <td>{{ $item->cedula }}</td>
                                                <td>{{ $item->nombre }}</td>
                                                <td>{{ $item->telefono }}</td>

          
                                                <td>
                                                    <form action="{{ route('autorizados.destroy', $item->id_autorizado) }}"
                                                        method="POST" class="form-eliminar">
                                                        @csrf
          
                                                        <div class="btn-group dropup">
          
                                                            <button type="button" class="btn btn-sm" data-toggle="modal"
                                                                data-target="#exampleModalEdit{{ $item->id_autorizado }}">
                                                                <i class="fas fa-edit" style="color:rgb(245, 178, 133); font-size:15px;"></i>
                                                            </button>
                                                        </div>
          
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm">
                                                            <i class="fas fa-trash-alt"
                                                                style=" color:rgb(237, 22, 22); font-size:15px;"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                @include('SAH.ahorros.editar_autorizados')
          
                                            </tr>
          
                                        @endforeach
                                    @endif
          
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                     
                      <div class="card" style="width: 100%;">
                        <div class="card-header">
          
                            <i class="fas fa-table me-1"></i>
                            LISTA DE BENEFICIARIOS  
                            <button type="button" class="btn btn-primary btn-sm ml-5" data-toggle="modal"style="color:white;" data-target="#exampleModalCenternewBeneficiario">
                              <i class="fas fa-plus" style="font-size:17px; color: rgb(185, 199, 242)"></i>
                              Agregar Beneficiario
                            </button>                       
                        </div>
          
                        <div class="card-body">
                            <style>
                                #tablaBeneficiarios th {
                                    text-align: center;
                                    color: white;
                                }
          
                                #tablaBeneficiarios thead {
                                    background-color: rgb(128, 128, 128);
                                }
          
                                #tablaBeneficiarios {
                                    width: 100%;
                                }
          
                            </style>
          
                            <table class="table table-hover display" id="tablaBeneficiarios" >
                                <thead>
                                    <tr>
                                        <th>Cedula</th>
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Accion</th>                                                         
                                                        
                                    </tr>
                                </thead>
                                <tbody>
          
                                    @if (isset($ahorro))
                                        @foreach ($ahorro->beneficiarios as $item)
          
                                            <tr class="text-center">
          
                                                <td>{{ $item->cedula }}</td>
                                                <td>{{ $item->nombre }}</td>
                                                <td>{{ $item->telefono }}</td>

          
                                                <td>
                                                    <form action="{{ route('beneficiarios.destroy', $item->id_beneficiario) }}"
                                                        method="POST" class="form-eliminar">
                                                        @csrf                                                       
                                                        <div class="btn-group dropup">      
                                                            <button type="button" class="btn btn-sm" data-toggle="modal"
                                                                data-target="#exampleModalEdit{{ $item->id_beneficiario}}">
                                                                <i class="fas fa-edit"
                                                                    style="color:rgb(245, 178, 133); font-size:15px;"></i>
                                                            </button>
                                                        </div>
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm">
                                                        <i class="fas fa-trash-alt"style=" color:rgb(237, 22, 22); font-size:15px;"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                @include('SAH.ahorros.editar_beneficiario')
          
                                            </tr>
          
                                        @endforeach
                                    @endif
          
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>          
        </div>
        </div>

        <div class="card-footer text-center">
          {{-- <button type="button" class="btn btn-lg btn-success">Terminar</button> --}}
          <a class="btn btn-primary btn-md " href="{{route('ahorros.index')}}">
            <i class="fas fa-plus" style="font-size:17px; color: rgb(185, 199, 242)"></i>
            TERMINAR
        </a>
        </div>
        
      </div>
     
    {{-- </div> --}}
  {{-- </div> --}}
@endsection
@section('js')
<script src="{{asset('js/SAH/tablas.js')}}"></script>
 <script >tablaBeneficiarios();tablaAutorizados();</script>
<script src="assets/js/tipo_ahorro/alertas.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- tabla --}}
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

@endsection
