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

                <form action="" method="post">
                      <h3 class="pb-4">Actualizar Familiar</h3>
                    
                                                                      
                      <div class="mb-3">
                        <label for="direccion-SAS" class="form-label">Direccion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                  
                      <div class="mb-3">
                        <label for="nacionalidad-SAS" class="form-label">Nacionalidad</label>
                        <select name="listaPaises" class="form-control input-sm">
                                  <option>Selecione un Pais</option>
                                    <option value="1">Costa Rica</option>
                                    <option value="2">Nicaragua</option>
                                    <option value="3">Panama</option>
                        </select>
                      </div>
                  
                      <div class="mb-3">
                        <label for="identificacion-SAS" class="form-label">Tipo de Identificacion</label>
                        <select name="listaIdentificaciones" class="form-control input-sm">
                                  <option>Selecione Identificacion</option>
                                    <option value="1">Persona Fisica Nacional</option>
                                    <option value="2">Persona Fisica Residente</option>
                                    <option value="3">Persona Juridica</option>
                        </select>
                      </div>
          
                      <div class="mb-3">
                        <label for="telefono-SAS" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Telefono">
                      </div>
                  
                      <div class="mb-3">
                        <label for="celular-SAS" class="form-label">Celular</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Celular">
                      </div>
                  
                      <div class="mb-3">
                        <label for="correo-SAS" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                  
                      <div class="mb-3">
                        <label for="profesion-SAS" class="form-label">Profesion</label>
                        <select name="listaEstadoCivil" class="form-control input-sm">
                                  <option>Selecione una Profesion</option>
                                    <option value="1">Medico</option>
                                    <option value="2">Ingeniero software</option>
                                    <option value="3">administrador</option>
                        </select>
                      </div>
                  
                      <div class="mb-3">
                        <label for="parentesco-SAS" class="form-label">Parentesco</label>
                        <select name="listaEstadoCivil" class="form-control input-sm">
                                  <option>Selecione un Parentesco</option>
                                    <option value="1">Conyugue</option>
                                    <option value="2">Madre</option>
                                    <option value="3">Padre</option>
                        </select>
                      </div>
    
    
                      <div class="mb-3">
                        <label for="estado-SAS" class="form-label">Estado</label>
                        <select name="listaEstadoCivil" class="form-control input-sm">
                                  <option>Selecione un Estado</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                    <option value="3">Aprobado</option>
                        </select>
                      </div>
    
                        <div class="mb-3">
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success mt-3">Actualizar</button>
                          </div>
                        </div>
    
               </form>
    
            </div>
        </div>
    </div>

@endsection
@section('js')
    
@endsection