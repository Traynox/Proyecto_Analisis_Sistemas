@extends('plantilla')
@section('css')
    
@endsection
@section('contenido')
  <div class=""  >
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title" >Crear cliente</h5>
         
        </div>
        <form action="{{ route('ahorros.store') }}" enctype="multipart/form-data"
            class="form-group form-grid" method="POST">
            @csrf
         
        <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                      <div class="mb-3">
                        <label class="form-label">Cedula</label>
                        <input type="text" value="" class="form-control mb-2" name="cedula" required>
                    </div>

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" value="" class="form-control mb-2" name="nombre" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">apellido</label>
                            <input type="text" value="" class="form-control mb-2" name="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input type="text" value="" class="form-control mb-2" name="telefono" required>
                        </div>
                    </div>
                 
            
        </div>
        {{-- <button type="submit" class="btn btn-primary">Guardar</button> --}}
   

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('js')
{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
{{-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script> --}}
{{-- <script src="assets/js/dataTable.js"></script> --}}
{{-- <script >iniciarTablaContactos();</script> --}}
{{-- <script src="assets/js/alertas.js"></script>     --}}
@endsection
