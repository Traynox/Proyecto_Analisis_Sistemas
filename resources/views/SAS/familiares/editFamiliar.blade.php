@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
    {{'Actualizar Familiares'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
        <div class="col-10">
            <div id="perfil-img"><i class="fas fa-users"></i></div>
            <h1 class="mx-5 my-3">Actualizar Datos Familiar</h1>
        </div>
    @endsection


    <div class="card">
        <div class="card-body">
            <div class="col-6 mx-auto" id="reg-paises">

                <form action="{{ route('actFamiliar', $familiar->id_familiar) }}" method="post">
                  @method('PUT')
                  @csrf
                      <h3 class="pb-4">Actualizar Familiar</h3>

                      <div class="mb-3">
                        <label for="direccion-SAS" class="form-label">Direccion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$familiar->direccion}}" name="fdireccion"></textarea>
                      </div>
                  
                      <div class="mb-3">
                        <label for="nacionalidad-SAS" class="form-label">Nacionalidad</label>
                        <select name="listaPaises" class="form-control input-sm">
                                  <option>Selecione un Pais</option>
                                  @foreach ($nacionalidades as $item)
                                  <option value="{{ $item->id_nacionalidad }}">{{ $item->pais }}</option>
                                  @endforeach
                        </select>
                      </div>
                  
                      <div class="mb-3">
                        <label for="identificacion-SAS" class="form-label">Tipo de Identificacion</label>
                        <select name="listaIdentificaciones" class="form-control input-sm">
                                  <option>Selecione Identificacion</option>
                                    @foreach ($identificaciones as $item)
                                    <option value="{{$item->id_identificacion}}">{{$item->tipo}}</option>
                                    @endforeach
                        </select>
                      </div>
          
                      <div class="mb-3">
                        <label for="telefono-SAS" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" value="{{$familiar->telefono}}" name="ftelefono">
                      </div>
                  
                      <div class="mb-3">
                        <label for="celular-SAS" class="form-label">Celular</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" value="{{$familiar->celular}}" name="fcelular">
                      </div>
                  
                      <div class="mb-3">
                        <label for="correo-SAS" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$familiar->correo}}" name="fcorreo">
                      </div>
                  
                      <div class="mb-3">
                        <label for="profesion-SAS" class="form-label">Profesion</label>
                        <select name="listaProfesiones" class="form-control input-sm">
                                  <option>Selecione una Profesion</option>
                                    @foreach ($profesiones as $item)
                                    <option value="{{$item->id_profesion}}">{{$item->nombre}}</option>
                                    @endforeach
                        </select>
                      </div>
                  
                      <div class="mb-3">
                        <label for="parentesco-SAS" class="form-label">Parentesco</label>
                        <select name="listaParentescos" class="form-control input-sm">
                                  <option>Selecione un Parentesco</option>
                                    @foreach ($parentescos as $item)
                                    <option value="{{$item->id_parentesco}}">{{$item->nombre}}</option>
                                    @endforeach
                        </select>
                      </div>
    
    
                      <div class="mb-3">
                        <label for="estado-SAS" class="form-label">Estado</label>
                        <select name="listaEstados" class="form-control input-sm">
                                  <option>Selecione un Estado</option>
                                    @foreach ($estados as $item)
                                    <option value="{{$item->id_estado}}">{{$item->nombre}}</option>
                                    @endforeach
                        </select>
                      </div>
    
                        <div class="mb-3">
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success mt-3">Guardar</button>
                          </div>
                        </div>

               </form>
    
            </div>
        </div>
    </div>

@endsection
@section('js')
    
@endsection