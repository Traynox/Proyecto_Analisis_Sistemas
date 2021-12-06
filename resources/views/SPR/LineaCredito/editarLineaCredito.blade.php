@section('titulo')
    Linea de credito
@endsection
@extends('plantilla')
@section('css')
    <link rel="stylesheet" href="css/cssLineaCredito.css">
@endsection
@section('contenido')
    
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Linea de credito nueva</h3>
                    <p>Llene los datos correspondientes</p>
                    <form action="{{route('updateLinea', $lineaCredito)}}" method="POST" class="requires-validation">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12"> 
                            <select class="form-select mt-3" name="asociado" required> 
                                  <option selected value="{{$lineaCredito->asociado->id_asociado}}">{{$lineaCredito->asociado->nombre_completo}}</option>
                                  @foreach ($asociados as $item)
                                    <option value="{{$item->id_asociado}}">{{$item->nombre_completo}}</option>                                      
                                  @endforeach
                            </select>
                       </div>

                        <div class="col-md-12"> 
                            <select class="form-select mt-3" name="tipo" required> 
                                  <option selected value="{{$lineaCredito->tipo->id_tipo_credito}}">{{$lineaCredito->tipo->nombre}}</option>
                                  @foreach ($tipos as $item)
                                    <option value="{{$item->id_tipo_credito}}">{{$item->nombre}}</option>                                      
                                  @endforeach
                            </select>
                       </div>

                     <div class="col-md-12 mt-3">
                        <input class="form-control" type="number" name="monto" placeholder="Monto" value="{{$lineaCredito->monto}}" required>
                        <div class="valid-feedback">Username field is valid!</div>
                        <div class="invalid-feedback">Username field cannot be blank!</div>
                     </div>

                     <div class="col-md-12">
                        <input class="form-control" type="text" name="tasaInteres" placeholder="Tasa de Interes" value="{{$lineaCredito->tasa_interes}}" required>
                        <div class="valid-feedback">Username field is valid!</div>
                        <div class="invalid-feedback">Username field cannot be blank!</div>
                     </div>

                     <div class="col-md-12">
                        <input class="form-control" type="text" name="nombreFiador" placeholder="Nombre de fiador" value="{{$lineaCredito->fiador}}" required>
                        <div class="valid-feedback">Username field is valid!</div>
                        <div class="invalid-feedback">Username field cannot be blank!</div>
                     </div>

                        {{-- <div class="col-md-12">
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>

                       <div class="col-md-12">
                            <select class="form-select mt-3" required>
                                  <option selected disabled value="">Position</option>
                                  <option value="jweb">Junior Web Developer</option>
                                  <option value="sweb">Senior Web Developer</option>
                                  <option value="pmanager">Project Manager</option>
                           </select>
                            <div class="valid-feedback">You selected a position!</div>
                            <div class="invalid-feedback">Please select a position!</div>
                       </div>


                       <div class="col-md-12">
                          <input class="form-control" type="password" name="password" placeholder="Password" required>
                           <div class="valid-feedback">Password field is valid!</div>
                           <div class="invalid-feedback">Password field cannot be blank!</div>
                       </div>


                       <div class="col-md-12 mt-3">
                        <label class="mb-3 mr-1" for="gender">Gender: </label>

                        <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                        <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                        <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                        <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                        <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                        <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                           <div class="valid-feedback mv-up">You selected a gender!</div>
                            <div class="invalid-feedback mv-up">Please select a gender!</div>
                        </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label">I confirm that all data are correct</label>
                     <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                    </div> --}}
              

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-warning">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
@section('js')
    
@endsection