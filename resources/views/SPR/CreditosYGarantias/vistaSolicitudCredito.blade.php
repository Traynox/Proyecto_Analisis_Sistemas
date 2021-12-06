@section('titulo')
    Solictud de creditos
@endsection
@extends('plantilla')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection
@section('titulo-contenido')
    @include('SPR.barranavegacion')
@endsection
@section('contenido')
    <div class="container">                
                       <h3>Solicitudes de credito</h3>
                            <a class=" btn btn-sm btn-primary mb-2" href="{{route('solicitudes')}}">Nueva Solicitud <i class="fas fa-plus"></i></a>
                           <table class="table table-striped" style="width:100%" id="tabla">
                           <thead>
                               <tr>
                                   <th>Nombre</th>
                                   <th>Cedula</th>
                                   <th>Tipo de credito</th>
                                   <th>Estado</th>
                                   <th>Acciones</th>

                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($solicitudes as $item)
                               <tr>
                                <td>{{$item->asociado->nombre_completo}}</td>
                                <td>{{$item->asociado->cedula}}</td>
                                <td>{{$item->tipo->nombre}}</td>
                                @switch($item->estado)
                                    @case(0)
                                        <td><div class="badge bg-danger text-wrap" style="width: 6rem;">
                                            Rechazada
                                          </div></td>
                                        @break
                                    @case(1)
                                    <td><div class="badge bg-warning text-wrap" style="width: 6rem;">
                                        En revision
                                      </div></td>                                       
                                        @break
                                    @case(2)
                                    <td><div class="badge bg-success text-wrap" style="width: 6rem;">
                                        Aprobada
                                      </div></td>                                       
                                        @break
                                    @default
                                        
                                @endswitch
                                <td>
                                 <a class=" btn btn-sm btn-warning" href="{{route('editSolicitud', $item)}}"><i class="fas fa-pencil-alt"></i></a>
                 
                                 <form action="{{route('eliminarSolicitud', $item)}}" method="POST" class="d-inline">
                                     @method('DELETE')
                                     @csrf
                                     <button type="submit" class="btn btn-danger btn-sm remove_contacto"><i class="fas fa-minus-circle"></i></button> 
                                 </form>
                                 </td>
                             
                            </tr>
                               @endforeach             
                   </tbody>
                   <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Tipo de credito</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
               </table>   
    </div>

  {{--   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="container">
                <form action="" method="POST">
                    @method('PUT')
                    @csrf
                  <h5>Cambiar estado</h5>
                  <select class="form-select" name="asociado" required> 
                    <option selected disabled value="">Asociado</option>
                      <option value="0">Rechazado</option>                                      
                      <option value="1">En Revision</option>                                      
                      <option value="2">Aprovado</option>                                      
                    </select>
            </form>
              </div>
          </div>
        </div>
      </div> --}}
       
   @endsection
   @section('js')

{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  --}}    
    <script>
        $(document).ready(function() {
            $('#tabla').DataTable();
        } );
    </script>
{{--     <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
    
        myModal.addEventListener('shown.bs.modal', function () {
          myInput.focus()
        })
      </script> --}}
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

@endsection
@section('js')
    
@endsection