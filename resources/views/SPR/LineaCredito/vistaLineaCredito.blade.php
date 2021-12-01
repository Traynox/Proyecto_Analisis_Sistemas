@extends('plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection
@section('contenido')
<div class="container">
    <a class=" btn btn-sm btn-primary" href="{{route('nuevaLineascreditos')}}"><i class="fas fa-plus"></i></a>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Tipo</th>
            <th>Tasa de Interes</th>
            <th>Monto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lineaCreditos as $item)
        <tr>
            <td>{{$item->asociado->nombre_completo}}</td>
            <td>{{$item->asociado->cedula}}</td>
            <td>{{$item->tipo->nombre}}</td>
            <td>{{$item->tasa_interes}}</td>
            <td>{{$item->monto}}</td>
            <td>
                <a class=" btn btn-sm btn-warning" href=""><i class="fas fa-pencil-alt"></i></a>

                <form action="{{route('eliminarLinea', $item)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm remove_contacto"><i class="fas fa-minus-circle"></i></button> 
                </form>
                <a class=" btn btn-sm btn-secondary" href=""><i class="fas fa-money-bill-wave"></i></a>
                </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Tipo</th>
            <th>Tasa de Interes</th>
            <th>Monto</th>
        </tr>
    </tfoot>
</table>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
@endsection