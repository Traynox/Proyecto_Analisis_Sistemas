<div class="modal fade" id="hola" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h5 class="modal-title"><i class="fas fa-user"></i> Editar a </h5>
          <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <form class="row g-3" {{-- action="" method="" --}}>
            {{--  @csrf
            @method('PUT') --}}
              
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Código</label>
              <input type="text" name="codigo" class="form-control" placeholder="Código ...">
            </div>

            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="Nombre ...">
            </div>

            <div class="col-12">
              <label for="inputAddress" class="form-label">Dirección</label>
              <input type="text" name="direccion" class="form-control" id="inputAddress" placeholder="Dirección ...">
            </div>

            <div class="col-12">
              <label for="inputAddress2" class="form-label">Contacto Directo</label>
              <input type="text" name="contacto_directo" class="form-control" id="inputAddress2" placeholder="A elección ...">
            </div>

            <div class="col-md-6">
              <label for="inputCity" class="form-label">Teléfono</label>
              <input type="number" name="telefono" class="form-control" placeholder="# Teléfono ...">
            </div>

            <div class="col-md-4">
              <label for="inputState" class="form-label">Estado</label>
              <select id="inputState" class="custom-select">
                <option selected>Activo</option>
                <option>Inactivo</option>
              </select>
            </div>
           
            <div class="col-12 text-right">
              <button class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
            </div>

          </form>
        </div>
      </div>
    </div>
</div>