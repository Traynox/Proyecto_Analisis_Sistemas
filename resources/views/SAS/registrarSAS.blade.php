@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
  {{'Registrar Asociados'}}
@endsection

@section('contenido')

@section('titulo-contenido')
  <div class="col-7">
    <div id="perfil-img"><i class="fas fa-plus-square"></i></div>
    <h1 class="mx-5 my-3">Registro de Asociados</h1>
  </div>
@endsection

        <div class="container" id="box-registros">

           <form action="" method="post">

                <div class="mx-5 my-4" id="carta-registros">
          
                  <div class="mb-3">
                    <label for="cedula-SAS" class="form-label">Cedula</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cedula del Asociado">
                  </div>
              
                  <div class="mb-3">
                    <label for="nombre-SAS" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Asociado">
                  </div>
              
                  <div class="mb-3">
                    <label for="fnacimiento-SAS" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fnacimiento" value="">
                  </div>
              
                  <div class="mb-3">
                    <label for="fingreso-SAS" class="form-label">Fecha de Ingreso</label>
                    <input type="date" class="form-control" name="fingreso" value="">
                  </div>
              
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
                    <label for="estadoCivil-SAS" class="form-label">Estado Civil</label>
                    <select name="listaEstadoCivil" class="form-control input-sm">
                              <option>Selecione Identificacion</option>
                                <option value="1">Union Libre</option>
                                <option value="2">Conyugue</option>
                                <option value="3">Soltero(a)</option>
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
                    <label for="estado-SAS" class="form-label">Estado</label>
                    <select name="listaEstadoCivil" class="form-control input-sm">
                              <option>Selecione un Estado</option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                                <option value="3">Aprobado</option>
                    </select>
                  </div>
      
                  <div class="mb-3">
              
                    <label for="foto-SAS" class="form-label">Foto de Perfil</label>
                    <div class="">

                        <form class="md-form">
                          <div class="file-field">
                            <div class="mb-2">
                              <img src="img/fp_01.png"
                                class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                            </div>
                            <div class="d-flex justify-content-start">
                              <div class="btn btn-mdb-color btn-rounded float-left">                    
                                <input accept="image/*" type="file" class="form-control  btn btn-secondary">
                              </div>
                            </div>
                          </div>
                        </form>
                
                      </div>
              
                    </div>


                    <div class="mb-3">

                        <label for="firma-digital" class="form-label">Firma Digital</label>
                        <div class="">


                            <form class="md-form">
                              <div class="file-field">
                                <div class="mb-2">
                                  <img src="img/fd_04.png"
                                    class="z-depth-1-half d-firma" alt="example placeholder avatar">
                                </div>
                                <div class="d-flex justify-content-start my-auto">

                                  <div class="btn btn-mdb-color btn-rounded float-left">
                                    <input type="file" class="form-control btn btn-secondary">
                                  </div>
                                
                                </div>
                              </div>
                            </form>
                    
                          </div>

                    </div>

                    <div class="mb-5">
                      <label for="clave-SAS" class="form-label">Clave de Acceso</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Clave de acceso">
                    </div>

                    <div class="mb-3">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success mt-3">Guardar</button>
                      </div>
                    </div>

              </div>


           </form>
      
        </div> <!-- box-registros -->

@endsection

@section('js')
    
@endsection