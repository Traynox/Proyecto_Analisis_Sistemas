  <!-- Modal Crear -->
  <div class="modal fade" id="exampleModalCenternewCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Agregar Autorizado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('autorizados.store')}}" enctype="multipart/form-data"
            class="form-group form-grid" method="POST">
            @csrf
         
        <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">

                      <div class="mb-3">
                        <label class="form-label">Cedula</label>
                        <input type="text" value="" class="form-control mb-2" name="cedula" required>
                    </div>

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" value="" class="form-control mb-2" name="nombre" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Primer Apellido</label>
                            <input type="text" value="" class="form-control mb-2" name="primer_apellido" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Segundo Apellido</label>
                          <input type="text" value="" class="form-control mb-2" name="segundo_apellido" required>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">

                        <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input type="text" value="" class="form-control mb-2" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nacionalidad</label>
                            <select class="custom-select mr-sm-2 " name="nacionalidad" id="nacionalidad">
                              @forelse ($nacionalidades as $item)
                              <option value="{{$item->id_nacionalidad}}">{{$item->pais}}</option>
                              @empty
                              <option value="No hay nacionalidad">...</option>    
                              @endforelse
                              </select>                        
                            </div>
                        <div class="mb-3">
                          <label class="form-label">Parentesco</label>
                          <select class="custom-select mr-sm-2 " name="parentesco" id="parentesco">
                            @forelse ($parentescos as $item)
                            <option value="{{$item->id_parentesco}}">{{$item->nombre}}</option>
                            @empty
                            <option value="No hay parentescos">...</option>    
                            @endforelse
                            </select>                      
                          </div>
                      <div class="mb-3">
                        <label class="form-label">Tipo de Identificacion</label>
                        <select class="custom-select mr-sm-2 " name="identificacion" id="identificacion">
                          @forelse ($identificaciones as $item)
                          <option value="{{$item->id_identificacion}}">{{$item->tipo}}</option>
                          @empty
                          <option value="No hay tipo de Identificacion">...</option>    
                          @endforelse
                          </select>                    
                        </div>
                    </div>
                    
                 
            
    </div>
    {{-- <button type="submit" class="btn btn-primary">Guardar</button> --}}
   

</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
