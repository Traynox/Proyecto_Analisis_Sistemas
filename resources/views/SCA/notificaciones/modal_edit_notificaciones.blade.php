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
            <div class="form-group">
              <label for="my-input">Tipo Mensaje: </label>
             <select name="" id="" class="custom-select">
                 <option value="">Leyenda</option>
                 <option value="">Mensaje Emergente</option>
             </select>
            </div>

            <div class="form-group">
                <label for="my-input">Mensaje: </label>
                <textarea name="nombre" class="form-control" placeholder="descripcion del mensaje..." rows="5"></textarea>
            </div>
            
            <div class="col-12 text-right">
              <button class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
            </div>

          </form>
        </div>
      </div>
    </div>
</div>