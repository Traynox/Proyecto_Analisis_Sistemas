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
                       <form class="" >
                       <h3>Prestamos</h3>                     
                           <table class="table table-striped" style="width:100%" id="tabla">
                           <thead>
                               <tr>
                                   <th>Nombre</th>
                                   <th>Cedula</th>
                                   <th>Tipo</th>
                                   <th>Comp. domicio</th>
                                   <th>Comp. ingresos</th>
                                   <th>Carta patronal</th>
                                   <th>Historial crediticio</th>
                                   <th>Acciones</th>
                               </tr>
                           </thead>
                           <tbody>
                     @foreach ($prestamos as $item)
                     @if ($item->solicitud->estado == 2)              
                       <tr>
                           <td>{{$item->solicitud->asociado->nombre_completo}}</td>
                           <td>{{$item->solicitud->asociado->cedula}}</td>
                           <td>{{$item->solicitud->tipo->nombre}}</td>
                           <td class="text-center"> <a class=" btn btn-sm btn-secondary" href="{{route('generarPDF')}}"><i class="fas fa-file-pdf"></i></a> </td>
                           <td class="text-center"> <a class=" btn btn-sm btn-secondary" href="{{route('generarPDF')}}"><i class="far fa-file-pdf"></i></a> </td>
                           <td class="text-center"> <a class=" btn btn-sm btn-secondary" href="{{route('generarPDF')}}"><i class="fas fa-file-pdf"></i></a> </td>
                           <td class="text-center"> <a class=" btn btn-sm btn-secondary" href="{{route('generarPDF')}}"><i class="far fa-file-pdf"></i></a> </td>
                           <td class="text-center">            
                            <form action="" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm remove_contacto"><i class="fas fa-minus-circle"></i></button> 
                            </form>
                            </td>
                        
                       </tr>
                       @endif 
                       @endforeach
             
                   </tbody>
                   <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Tipo</th>
                        <th>Comp. domicio</th>
                        <th>Comp. ingresos</th>
                        <th>Carta patronal</th>
                        <th>Historial crediticio</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
               </table>   
            </form>
</div>
       
   @endsection
   @section('js')


   
       
       
   <script>
    $(document).ready(function() {
        $('#tabla').DataTable();
    } );
</script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

@endsection
@section('js')
    
@endsection