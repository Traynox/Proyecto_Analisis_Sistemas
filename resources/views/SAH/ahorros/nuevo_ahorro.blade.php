@extends('plantilla')
@section('css')
    
@endsection
@section('contenido')
  {{-- <div class=""  > --}}
    {{-- <div class="container"> --}}
      <div class="card">
        <div class="card-header">
          <h5 class="card-title" >CREAR AHORRO</h5>
         
        </div>
        <form action="{{ route('ahorros.store') }}" enctype="multipart/form-data"
            class="form-group form-grid" method="POST">
            @csrf
         
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">

                      <div class="mb-3">
                        <label class="form-label">Asociado</label>
                        <select class="custom-select mr-sm-2 " name="asociado" id="asociado">
                          {{-- @forelse ($user->productos as $item)
                          <option value="{{$item->id_producto}}">{{$item->nombre}}</option>
                          @empty
                          <option value="No hay productos">...</option>    
                          @endforelse --}}
                          </select>                    
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tipo de Ahorro</label>
                            <select class="custom-select mr-sm-2 " name="tipo_ahorro" id="tipo_ahorro">
                              {{-- @forelse ($user->productos as $item)
                              <option value="{{$item->id_producto}}">{{$item->nombre}}</option>
                              @empty
                              <option value="No hay productos">...</option>    
                              @endforelse --}}
                              </select>                         
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Monto por cuota</label>
                            <input type="number" value="" class="form-control mb-2" name="monto_cuota" min="10000" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Moneda</label>
                            <select class="custom-select mr-sm-2 " name="moneda" id="moneda">
                              <option value="colon">Colon</option>
                              <option value="dolar">Dolar</option>  
                              </select>                        
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="mb-3">
                        <label class="form-label">Duracion</label>
                        <select class="custom-select mr-sm-2 " name="duracion" id="duracion">
                          <option value="colon">Colon</option>
                          <option value="dolar">Dolar</option>  
                          </select>                        
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Fecha Inicio</label>
                        <input type="date" value="" class="form-control mb-2" name="fech_inicio"  required>         
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Fecha Final</label>
                        <input type="date" value="" class="form-control mb-2" name="fech_final"  required>         
                      </div>
                      <p></p>
                    </div>
            
        </div>
        {{-- <button type="submit" class="btn btn-primary">Guardar</button> --}}
   

        </div>

        <div class="card-footer text-center">
          <button type="submit" class="btn btn-lg btn-success">Siguiente</button>
        </div>
        </form>
      </div>
     
    {{-- </div> --}}
  {{-- </div> --}}
@endsection
@section('js')
<script src="{{asset('js/SAH/tablas.js')}}"></script>
 <script >tablaBeneficiarios();tablaAutorizados();</script>
<script src="assets/js/tipo_ahorro/alertas.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- tabla --}}
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

@endsection
