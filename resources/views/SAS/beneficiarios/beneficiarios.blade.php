@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
    {{'Gestion Beneficiarios'}}
@endsection

@section('contenido')

    @section('titulo-contenido')
        <div class="col-7">
            <div id="perfil-img"><i class="fas fa-apple-alt"></i></div>
            <h1 class="mx-5 my-3">Gestion de Beneficiarios</h1>
        </div>
    @endsection

    <div class="container-fluid">

        <div class="col-6 mx-auto mb-4 py-5">

            <div class="mx-auto card" id="reg-paises">

                <div class="card-body">

                    <form action="" method="post" class="pt-3 pb-3">
                      
                      @csrf
                        <h3>Registrar Beneficiario</h3>
    
                        <div class="mb-3">
                          <label for="cedula-SAS" class="form-label">Cedula</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cedula del Beneficiario">
                        </div>

                        <div class="mb-3">
                            <label for="nbeneficiario" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Beneficiario">
                        </div>
    
                        <div class="mb-3">
                            <label for="detalle" class="form-label">Detalle</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Detalle">
                        </div>
    
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor Beneficio</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Valor del Beneficio">
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
                            <label for="direccion-SAS" class="form-label">Direccion</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
    
                          <div class="mb-3">
                            <label for="correo-SAS" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
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
    
                        <div class="row justify-content-center mt-4">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
    
                    </form>

                </div>
    
            </div>
            
        </div>


    </div>



@endsection
@section('js')
<script src="{{ asset('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js') }}"></script>
@endsection