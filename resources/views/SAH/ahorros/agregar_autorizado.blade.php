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
                    <div class="col-md-12 col-sm-12">

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
                        <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input type="text" value="" class="form-control mb-2" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nacionalidad</label>
                            <input type="text" value="" class="form-control mb-2" name="nacionalidad" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Parentesco</label>
                          <input type="text" value="" class="form-control mb-2" name="telefono" required>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Tipo de Identificacion</label>
                        <input type="text" value="" class="form-control mb-2" name="telefono" required>
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
