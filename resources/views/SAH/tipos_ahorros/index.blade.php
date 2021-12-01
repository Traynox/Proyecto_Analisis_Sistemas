@extends('plantilla')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/tipo_ahorro/alertas.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/tipo_ahorro/mostrar.js') }}"></script>

@endsection
@section('contenido')

    <div class="container">
        <button class="btn btn-primary btn-md " data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus" style="font-size:17px; color: rgb(185, 199, 242)"></i>
            NUEVO TIPO
        </button>
        <hr>
        @include('SAH.tipos_ahorros.tipos_create')


        <div class="row">
            <div class="card" style="width: 100%;">
                <div class="card-header">

                    <i class="fas fa-table me-1"></i>
                    TIPOS DE AHORROS

                </div>

                <div class="card-body">
                    <style>
                        #tabla th {
                            text-align: center;
                            color: white;
                        }

                        #tabla thead {
                            background-color: rgb(128, 128, 128);
                        }

                        #tabla {
                            width: 100%;
                        }

                    </style>

                    <table class="table table-hover display" id="tabla" style=" width:100%;">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>

                            @if (isset($tipos_ahorros))
                                @foreach ($tipos_ahorros as $item)

                                    <tr class="text-center">

                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->descripcion }}</td>


                                        <td>
                                            <form action="{{ route('tipos_ahorros.destroy', $item->id_tipo_ahorro) }}"
                                                method="POST" class="form-eliminar">
                                                @csrf

                                                <div class="btn-group dropup">

                                                    <button type="button" class="btn btn-sm" data-toggle="modal"
                                                        data-target="#exampleModalEdit{{ $item->id_tipo_ahorro }}">
                                                        <i class="fas fa-edit"
                                                            style="color:rgb(245, 178, 133); font-size:15px;"></i>
                                                    </button>
                                                </div>

                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm">
                                                    <i class="fas fa-trash-alt"
                                                        style=" color:rgb(237, 22, 22); font-size:15px;"></i></button>
                                            </form>
                                        </td>
                                        @include('SAH.tipos_ahorros.tipos_edit')

                                    </tr>

                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @if (session()->has('mensaje'))
            <div class="alert hide" style="z-index: 2;">
                <span class="fas fa-check-circle"></span>
                <span class="msg">{{ session('mensaje') }}</span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
            <script>
                $(document).ready(setTimeout(() => {
                    mostrar_alerta();
                }, 100));
                $('.close-btn').click(function() {
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                    setTimeout(function() {
                        //reacomoda el size de la pagina
                        $('.alert').removeClass("showAlert");
                        $('.alert').removeClass("hide");

                    }, 900);
                });
            </script>
        @endif


    </div>

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    {{-- Modal --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    {{-- tabla --}}

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>



    <script>
        var nombre;



        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $(document).ready(function() {
            var table = $('#tabla').DataTable({
                // dom: 'Bfrtip',
                // buttons: [{
                //     extend: 'pdf',
                //     text: '<i class="fas fa-file-pdf text-danger"></i> PDF',
                //     titleAttr: 'Exportar a excel',
                //     className: 'btn btn-success',
                //     customize: function(doc) {

                //         doc.styles.title = {

                //             color: '#41ADE7',
                //             fontSize: '20',
                //             alignment: 'center'
                //         }
                //     }

                // }, ],


                responsive: true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No hay datos para mostrar - lo siento",
                    "info": "Mostrando pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },

            });


        });


        $('#tabla tr').on('click', function() {
            nombre = $(this).find('td:nth-child(1)').html();

        });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/tipo_ahorro/alertas.js"></script>
@endsection
