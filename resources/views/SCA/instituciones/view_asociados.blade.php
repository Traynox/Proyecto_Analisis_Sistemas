@extends('plantilla')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style_SCA.css')}}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection

@section('contenido')

@php
    $arrayAsoc = array(
      [
        'codigo'=>'123',
        'nombre_completo'=>'Angie Quiros',
        'fecha_ingreso'=>'19/11/2021',
        'profesion'=>'Analista',
        'contacto'=>'77777777 | angie@gmail.com',
        'estado_pago'=>'false',
      ],
      [
        'codigo'=>'456',
        'nombre_completo'=>'Wendy Martinez',
        'fecha_ingreso'=>'19/11/2021',
        'profesion'=>'Diseñadora',
        'contacto'=>'88888888 | wendy@gmail.com',
        'estado_pago'=>'true',
      ],
      [
        'codigo'=>'789',
        'nombre_completo'=>'Emanuel González',
        'fecha_ingreso'=>'19/11/2021',
        'profesion'=>'Desarrollador',
        'contacto'=>'99999999 | emanuel@gmail.com',
        'estado_pago'=>'false',
      ],

      [
        'codigo'=>'321',
        'nombre_completo'=>'Delia Smith',
        'fecha_ingreso'=>'19/11/2021',
        'profesion'=>'Gerente',
        'contacto'=>'89898987 | delia@gmail.com',
        'estado_pago'=>'true',
      ],

      [
        'codigo'=>'654',
        'nombre_completo'=>'Pedrito Fernández',
        'fecha_ingreso'=>'19/11/2021',
        'profesion'=>'Secretario',
        'contacto'=>'78767876 | pedrito@gmail.com',
        'estado_pago'=>'false',
      ],

    );
@endphp

<div class="container mt-3 mb-3">
  <div class="clearfix">
    <div class="float-left">
      <a href="{{route('instituciones')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
    <a href="{{route('emp_ins')}}" class="btn btn-danger"><i class="fas fa-file-pdf"></i> Generar PDF</a>
    </div>
    <div class="float-right">
    <h5><i class="fas fa-users"></i> Asociados por institución <b>UCR</b></h5>  
    </div>
  </div>
</div>
    <div class="container">
      <div class="container">
         <table class="table table-bordered" id="tabla_asoc">
           <thead class="bg-dark text-light">
             <tr>
                <th style="width: 1%">Código</th>
                <th>Nombre Completo</th>
               {{--   <th>Fecha Ingreso</th>  --}}
                <th>Profesión</th>
                <th>Contacto</th> {{--  TELEFONO | CORREO  --}}
                <th style="width: 12%">Generar Planilla</th>
                <th>Estado</th>
             </tr>
           </thead>
           <tbody>
             @foreach ($arrayAsoc as $item)
             <tr>
               <td class="text-center">{{$item['codigo']}}</td>
               <td>{{$item['nombre_completo']}}</td>
               {{--  <td>{{$item['fecha_ingreso']}}</td>  --}}
               <td>{{$item['profesion']}}</td>
               <td>{{$item['contacto']}}</td>
               <td class="text-center">
                @if ($item['estado_pago']=="false")
                 <form method="POST" action="{{route('PLANILLAS')}}">
                   @csrf
                   @method('GET')
                   <button class="btn btn-sm btn-primary text-light"><i class="fas fa-clipboard-list"></i></button>
                 </form>
                 @endif
               </td>
               <td>
                 @if ($item['estado_pago']=="false")
                     <button onclick="return confirm ('Aplicar pago asociado (se envia correo con pdf)')" class="btn btn-sm btn-danger">PAGAR</button>
                     @else
                     <h6><span class="badge badge-success text-uppercase">pagado</span></h6>
                 @endif
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
        </div>
    </div>
@endsection

@section('js')
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready( function () {
        $('#tabla_asoc').DataTable({
            pageLength : 5,
            lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
            bInfo: false,
            bLengthChange:false,
        });
    } );
  </script>
@endsection