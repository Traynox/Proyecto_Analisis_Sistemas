<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-dark text-light">
               <div class="clearfix">
                   <div class="float-left">
                    <button class="btn btn-danger" id="volver"><i class="fas fa-arrow-left"></i></button>
                   </div>
                   <div class="float-right mt-2">
                    <h5><i class="fas fa-clipboard"></i> Registrar Instituciones</h5>
                   </div>
               </div>
            </div>
            <div class="card-body">

                <form class="row g-3" {{-- method="POST" action="{{url('instituciones')}}" --}}>
                    {{-- @csrf --}}
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
                      <input type="number" class="form-control" placeholder="# Teléfono ...">
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