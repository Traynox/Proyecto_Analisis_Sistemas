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
    <div class="container-fluid bg-dark text-light">
        <h5 class="text-center p-2"><i class="fas fa-building"></i> Instituciones</h5>
    </div>

    <div class="container-fluid mt-3">

        <div class="container mb-3 ver_inst">
            <button id="btn_nueva" class="btn btn-primary">+ Nueva</button>
 
                <a href="{{route('li_ins')}}" class="btn btn-danger">Generar PDF <i class="fas fa-file-pdf"></i></a>
        </div>

            @php
            $arrayPrueba = array(
                [
                    'id'=>'1',
                    'codigo'=>'AWE-123',
                    'nombre'=>'AWE',
                    'direccion'=>'Siquirres',
                    'contacto_directo'=>'awe@gmail.com',
                    'telefono'=>'86090002',
                    'estado'=>'activo',
                ],

                [
                    'id'=>'2',
                    'codigo'=>'ICE-111',
                    'nombre'=>'ICE',
                    'direccion'=>'Turrialba',
                    'contacto_directo'=>'ice@gmail.com',
                    'telefono'=>'60987808',
                    'estado'=>'inactivo',
                ],

                [
                    'id'=>'3',
                    'codigo'=>'INS-222',
                    'nombre'=>'INS',
                    'direccion'=>'San José',
                    'contacto_directo'=>'ins@gmail.com',
                    'telefono'=>'88888888',
                    'estado'=>'activo',
                ],

                [
                    'id'=>'4',
                    'codigo'=>'INA-111',
                    'nombre'=>'INA',
                    'direccion'=>'Cartago',
                    'contacto_directo'=>'ina@gmail.com',
                    'telefono'=>'77777777',
                    'estado'=>'inactivo',
                ],

                [
                    'id'=>'5',
                    'codigo'=>'UCR-111',
                    'nombre'=>'UCR',
                    'direccion'=>'Heredia',
                    'contacto_directo'=>'ucr@gmail.com',
                    'telefono'=>'89898989',
                    'estado'=>'activo',
                ],

                [
                    'id'=>'6',
                    'codigo'=>'BCR-111',
                    'nombre'=>'BCR',
                    'direccion'=>'Siquirres',
                    'contacto_directo'=>'bcr@gmail.com',
                    'telefono'=>'78867516',
                    'estado'=>'inactivo',
                ],
            );
            @endphp

        <div class="container ver_inst">
            <table class="table table-bordered" id="tabla">
                <thead class="bg-dark text-light">
                    <tr>
                        <th style="width: 3%">Código</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Contacto Directo</th> {{-- CORREO O LO QUE SEA--}}
                        <th style="width: 3%">Teléfono</th>
                        <th style="width: 3%">Estado</th>
                        <th style="width: 1%">Asociados</th>
                        <th style="width: 1%" class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arrayPrueba as $item)
                    <tr>
                        <td>{{$item['codigo']}}</td>
                        <td>{{$item['nombre']}}</td>
                        <td>{{$item['direccion']}}</td>
                        <td>{{$item['contacto_directo']}}</td>
                        <td>{{$item['telefono']}}</td>
                        @if ($item['estado']=="activo")
                        <td><span class="badge badge-success text-uppercase">Activo</span></td>
                        @else
                        <td><span class="badge badge-danger text-uppercase">Inactivo</span></td>
                        @endif

                        <td class="text-center">
                            <form method="POST" action="{{route('asociados_por_institucion')}}">
                                @csrf
                                @method('GET')
                                <button class="btn btn-success btn-sm"><i class="fas fa-users"></i></button>
                            </form>
                        </td>

                        <td>
                            <div class="clearfix">
                                <div class="float-start">
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#hola"><i class="fas fa-edit text-light"></i></button>
                                    @include('SCA.instituciones.modal_edit')
                                </div>
                                
                                <div class="float-end">
                                    <button onclick="return confirm ('¿Desea eliminar la institución {{$item['nombre']}}?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- PARA REGISTRAR INSTITUCIONES --}}
        <div class="container" id="nueva_institucion">
            @include('SCA.instituciones.registrar_institucion')
        </div>



    </div>
@endsection


@section('js')
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        var time=1000;

        $(document).ready( function () {
            $('#tabla').DataTable({
                pageLength : 5,
                lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
                bInfo: false,
                bLengthChange:false,
            });
        } );
        $('.ver_inst').show();
        $('#nueva_institucion').hide();
        
        $('#btn_nueva').click(function(){
            $('.ver_inst').hide(time);
            $('#nueva_institucion').show(time);
        });

        $('#volver').click(function(){
            $('.ver_inst').show(time);
            $('#nueva_institucion').hide(time);
        });

    </script>
@endsection