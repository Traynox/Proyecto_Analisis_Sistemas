  <!-- Modal Crear -->
  <div class="modal fade" id="exampleModal{{$item->id_ahorro}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Agregar Cuota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('monto.actu')}}" enctype="multipart/form-data"
            class="form-group form-grid" method="POST">
            @csrf
        <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                      <div class="mb-3">
                        <input type="hidden" value="{{$item->id_ahorro}}" class="form-control mb-2" name="id_ahorro">

                        <label class="form-label">Monto</label>
                        <input type="number" value="" class="form-control mb-2" name="cuota" required>
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
