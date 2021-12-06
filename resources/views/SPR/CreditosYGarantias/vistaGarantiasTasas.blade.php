@section('titulo')
    Garantias y Tasas
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
    <a class=" btn btn-sm btn-primary" href="{{route('garantias')}}">Nuevo <i class="fas fa-plus"></i></a>
{{-- ------------------------------------------ --}}<hr>{{-- ------------------------------------------ --}}

    <h3>Garantias de pago</h3>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Tipo</th>
            <th>Doc. Garantia</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($garantias as $item)
        <tr>
            <td>{{$item->asociado->nombre_completo}}</td>
            <td>{{$item->asociado->cedula}}</td>
            <td>{{$item->tipo->nombre}}</td>
            <td> <a class=" btn btn-sm btn-secondary" href="{{route('descargarDoc', $item)}}"><i class="fas fa-file-pdf"></i></a> </td>
            <td>{{$item->descripcion}}</td>
            <td>
                <a class=" btn btn-sm btn-warning" href="{{route('editGarantia', $item)}}"><i class="fas fa-pencil-alt"></i></a>

                <form action="{{route('eliminarG', $item)}}" method="POST" class="d-inline">
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
            <th>Tipo</th>
            <th>Doc. Garantia</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>
</div>

{{-- ------------------------------------------ --}}<hr>{{-- ------------------------------------------ --}}

<div class="container">
    <h3>Tasas Preferenciales</h3>

<table id="example2" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Valor</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasas as $item)
        <tr>
            <td>{{$item->asociado->nombre_completo}}</td>
            <td>{{$item->asociado->cedula}}</td>
            <td>{{$item->valor_tasa}}</td>
            <td>{{$item->descripcion}}</td>
            <td>
                <a class=" btn btn-sm btn-warning" href="{{route('editTasa', $item)}}"><i class="fas fa-pencil-alt"></i></a>

                <form action="{{route('eliminarT', $item)}}" method="POST" class="d-inline">
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
            <th>Valor</th>
            <th>Descripcion</th>
            <th>Acciones</th>
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

        $(document).ready(function() {
            $('#example2').DataTable();
        } );
    </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
@endsection