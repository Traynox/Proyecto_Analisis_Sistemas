@extends('plantilla')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style_SCA.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
@endsection

@section('contenido')

{{--  @php
    $array=array(
     [
      "nombre"=>"Angie",
      "cuenta"=>"121212121212",
     ],
     [
      "nombre"=>"Wendy",
      "cuenta"=>"121212121233",
     ],
     [
      "nombre"=>"Emanuel",
      "cuenta"=>"123123123123",
     ],
    );
@endphp  --}}
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-dark text-light">
              <div class="clearfix">
                  <div class="float-left">
                    <form action="{{route('asociados_por_institucion')}}">
                      <button class="btn btn-danger" id="volver"><i class="fas fa-arrow-left"></i></button>
                    </form>
                  </div>
                  <div class="float-right mt-2">
                    <h5><i class="fas fa-clipboard"></i> Registrar Planillas</h5>
                  </div>
              </div>
            </div>
            <div class="card-body">

                <form class="row g-3" method="POST" action="{{route('asociados_por_institucion')}}">
                    @csrf
                    @method('GET')
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Cuenta Asociado</label>
                      <input class="form-control" type="text" name="" id="" placeholder="# Cuenta">
                    </div>
        
                    <div class="col-md-6">
                      <label for="salario_bruto" class="form-label">Salario Bruto</label>
                      <input type="number" name="salario_bruto" class="form-control" placeholder="salario bruto ...">
                    </div>
        
                    <div class="col-12">
                      <label for="horas_laboradas" class="form-label">Horas Laboradas</label>
                      <input type="number" name="cantidad_horas_laboradas" class="form-control" id="inputAddress" placeholder="cantidad horas laboradas ...">
                    </div>
        
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Bonificación</label>
                      <input type="text" name="bonificacion" class="form-control" id="inputAddress2" placeholder="bonificación ...">
                    </div>
        
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">Rebajas</label>
                      <input type="number" name="rebajas" class="form-control" placeholder="rebajas ...">
                    </div>
        
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Salario Neto</label>
                      <input type="number" name="salario_neto" class="form-control" placeholder="salario neto ...">
                    </div>
                   
                    <div class="col-12 text-right">
                      <button class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection


@section('js')
    
@endsection