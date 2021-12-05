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
    <div class="container">
      <div class="row">
          <div class="col">
            <div class="card mt-5">
                <div class="card-header bg-dark text-light">
                    <i class="fas fa-pen"></i> Registrar mensajes
                </div>
                <div class="card-body">
                    <form {{--  action="{{url('notificaciones')}}" method="POST"  --}}>
                        {{--  @csrf  --}}
                        <div class="form-group">
                            <label for="my-input">Tipo Mensaje: </label>
                           <select name="" id="" class="custom-select">
                               <option value="">Leyenda</option>
                               <option value="">Mensaje Emergente</option>
                           </select>
                        </div>

                        <div class="form-group">
                            <label for="my-input">Mensaje: </label>
                            <textarea name="nombre" class="form-control" placeholder="descripcion del mensaje..." rows="5"></textarea>
                        </div>

                        <div class="text-end">
                           <button class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
          <div class="col">
            <table class="table table-bordered" id="tabla">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Mensajes</th>
                        <th>Tipo</th>
                        <th style="width: 20%;" class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mensaje 1</td>
                        <td>Leyenda</td>
                        <td>
                           <div class="clearfix">
                               <div class="float-left">
                                   <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#hola"><i class="fas fa-edit text-light"></i></button>
                                   @include('SCA.notificaciones.modal_edit_notificaciones')
                               </div>
                               <div class="float-right">
                                   <button onclick="return confirm ('¿Desea eliminar el mensaje?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                               </div>
                           </div> 
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

@section('js')
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#tabla').DataTable({
                pageLength : 5,
                lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
                bInfo: false,
                bLengthChange:false,
            });
        } );
    </script>
@endsection