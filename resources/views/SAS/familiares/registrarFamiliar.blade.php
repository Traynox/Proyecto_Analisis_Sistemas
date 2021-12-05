@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
  {{'Registrar Familiares'}}
@endsection

@section('contenido')

@section('titulo-contenido')
  <div class="col-7">
    <div id="perfil-img"><i class="fas fa-plus-square"></i></div>
    <h1 class="mx-5 my-3">Registro de Familiares</h1>
  </div>
@endsection

        <div class="container" id="box-registros">

           <form action="" method="post">
            @csrf
                <div class="mx-5 my-4" id="carta-registros">
          
                  <div class="mb-3">
                    <label for="cedula-SAS" class="form-label">Cedula</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cedula del Familiar">
                  </div>
              
                  <div class="mb-3">
                    <label for="nombre-SAS" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Familiar">
                  </div>
              
                  <div class="mb-3">
                    <label for="fnacimiento-SAS" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fnacimiento" value="">
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
                        <button type="submit" class="btn btn-success mt-3">Guardar</button>
                      </div>
                    </div>

              </div>


           </form>
      
        </div> <!-- box-registros -->

@endsection

@section('js')
    
@endsection