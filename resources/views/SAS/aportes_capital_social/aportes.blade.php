@extends('plantilla')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
@section('contenido')
    
    @section('titulo-contenido')
        <div class="col-7">
            <div id="perfil-img"><i class="fas fa-hand-holding-usd"></i></div>
            <h1 class="mx-5 my-3">Aportes al Capital Social</h1>
        </div>
    @endsection


  <div class="container-fluid">

      <div class="col-6 mx-auto mb-4 py-5">

          <div class="mx-auto card" id="reg-paises">

              <div class="card-body">

                <form action="" method="post">

                  @csrf
                  <h3>Registrar Aporte</h3>
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
                       <button type="submit" class="btn btn-success mt-3">Guardar</button>
                     </div>
                   </div>
     
                </div>
     
     
             </form>

              </div>
  
          </div>
          
      </div>

      <div class="col-12 mx-auto">
          
          <div class="mx-auto body-card" id="lista-paises">
  
            <table id="example" class="table table-striped table-light" style="width:100%">
              <thead class="thead-dark">
                  <tr>
                      <th>#</th>
                      <th>Asociado</th>
                      <th>Descripcion</th>
                      <th>Valor</th>
                      <th>Fecha</th>
                      <th>V. Acumulado</th>
                      <th>Intereses</th>
                      <th>Estado</th>
                      <th>Opciones</th>
                  </tr>
              </thead>
              <tbody>
                  
                  <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>Descripcion del aporte y su valor</td>
                      <td>₡ 950000</td>
                      <td>01/12/2021</td>
                      <td>₡1450000</td>
                      <td>2%</td>
                      <td>Cancelado</td>

                      <td>
                          <a href="" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
                            <form action="" class="d-inline" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-outline-danger" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <i class="far fa-trash-alt"></i>
                              </button>
                            </form> 
                      </td>
                  </tr>

                  <tr>
                      <td>2</td>
                      <td>4</td>
                      <td>Descripcion del aporte y su valor</td>
                      <td>₡ 250000</td>
                      <td>01/12/2021</td>
                      <td>₡610000</td>
                      <td>1%</td>
                      <td>Cancelado</td>
                      <td>
                          <a href="" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
                            <form action="" class="d-inline" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-outline-danger" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <i class="far fa-trash-alt"></i>
                              </button>
                            </form> 
                      </td>
                  </tr>

                  <tr>
                      <td>3</td>
                      <td>1</td>
                      <td>Descripcion del aporte y su valor</td>
                      <td>₡ 50000</td>
                      <td>01/12/2021</td>
                      <td>₡15000</td>
                      <td>1%</td>
                      <td>Pendiente</td>
                      
                      <td>
                          <a href="" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
                            <form action="" class="d-inline" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-outline-danger" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <i class="far fa-trash-alt"></i>
                              </button>
                            </form> 
                      </td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>3</td>
                    <td>Descripcion del aporte y su valor</td>
                    <td>₡ 350000</td>
                    <td>02/12/2021</td>
                    <td>₡875000</td>
                    <td>3%</td>
                    <td>Cancelado</td>
                      
                      <td>
                          <a href="" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>
                            <form action="" class="d-inline" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-outline-danger" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <i class="far fa-trash-alt"></i>
                              </button>
                            </form> 
                      </td>
                  </tr>

              </tbody>
        
          </table>
              
        </div>

      </div>

  </div>

@endsection
@section('js')

@endsection