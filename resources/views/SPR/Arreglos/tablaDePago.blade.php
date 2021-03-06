@section('titulo')
    Tabla de pago
@endsection
        @extends('plantilla')
    @section('css')
        <link rel="stylesheet" href="css/cssLineaCredito.css">
    @endsection

    @section('titulo-contenido')
        @include('SPR.barranavegacion')
    @endsection

    @section('contenido')
        
    <div class="form-body-tablas">
     <div class="row">
         <div class="col-10">

         
            {{-- <div class="form-holder ">
            
                <div class="form-content ">
            
                    <div class="form-itemsHistorial">--}}
                
                    
                        <form class="" >
                        <h3>Tablas de Pago</h3>

                        
                            <table class="table table-bordered" id="tabla">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>NOMBRE</th>
                                    <th>CUOTA</th>
                                    <th>ABONO AL CAPITAL</th>
                                    <th>SALDO DE CREDITO</th>
                                    <th>FECHA DE OPERACION</th>
                                </tr>
                            </thead>
                            <tbody>
                    {{-- @foreach ($empleados as $item) --}}
                        <tr>
                            <td>1</td>
                            <td>Yansineth</td>
                            <td>100</td>
                            <td>100</td>
                            <td>2000</td>
                            <td>10/12/2021</td>
                         
                        </tr>
              
        
 
                        {{-- @endforeach --}}
                    </tbody>
                </table>
                    



                        
                

                        
                        </form>
                        {{-- </div>
                </div>
            </div>--}}
            </div>
        </div>
    </div>

        
    @endsection
    @section('js')


    
        
        
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#tabla').DataTable({

                        dom: 'Bfrtip',
                        buttons: [
                            'pdf', 'print'
                        ],


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
            </script>
        
    @endsection   
        
        
        
        
        
        
        
        
        