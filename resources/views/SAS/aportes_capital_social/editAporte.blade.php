@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
    {{'Actualizar Aporte'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
        <div class="col-10">
            <div id="perfil-img"><i class="fas fa-hand-holding-usd"></i></div>
            <h1 class="mx-5 my-3">Actualizar Aporte al Capital Social</h1>
        </div>
    @endsection

    <div class="card">
        <div class="card-body">
            <div class="col-5 mx-auto" id="reg-paises">

                <form action="" method="post">

                  @csrf
                    <h3>Actualizar Aporte</h3>
                    <div class="mx-3 my-4" id="carta-registros">
              
                      <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                  
                      <div class="mb-3">
                        <label for="valor" class="form-label">Valor del Aporte</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Valor Aporte">
                      </div>
                  
                      <div class="mb-3">
                        <label for="fecha-aporte" class="form-label">Fecha del Aporte</label>
                        <input type="date" class="form-control" name="fecha-aporte" value="">
                      </div>
                       
                      <div class="mb-3">
                       <label for="interes" class="form-label">Intereses</label>
                       <input type="number" class="form-control" name="intereses">
                      </div>
       
                      <div class="mb-3">
                       <label for="estado-SAS" class="form-label">Estado</label>
                       <select name="listaEstados" class="form-control input-sm">
                                 <option>Selecione un Estado</option>
                                   <option value="1">Activo</option>
                                   <option value="2">Cancelado</option>
                                   <option value="3">Pendiente</option>
                       </select>
                     </div>
       
                     <div class="mt-5">
                       <div class="d-flex justify-content-center">
                         <button type="submit" class="btn btn-success mt-3">Actualizar</button>
                       </div>
                     </div>
       
                  </div>
              
               </form>
    
            </div>
        </div>
    </div>

@endsection
@section('js')
    
@endsection