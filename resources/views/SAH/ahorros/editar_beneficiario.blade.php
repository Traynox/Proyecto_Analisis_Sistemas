  <!-- Modal Crear -->
  <div class="modal fade" id="exampleModalEdit{{ $item->id_beneficiario}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Editar Beneficiario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('beneficiarios.update',$item->id_beneficiario)}}" enctype="multipart/form-data"
            class="form-group form-grid" method="POST">
            @csrf
            @method('PUT')
        <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6">

                      <div class="mb-3">
                        <input type="hidden" value="{{$ahorro->id_ahorro}}" class="form-control mb-2" name="id_ahorro">

                        <label class="form-label">Cedula</label>
                        <input type="text" value="{{$item->cedula}}" class="form-control mb-2" name="cedula" >
                    </div>

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" value="{{$item->nombre}}" class="form-control mb-2" name="nombre" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Primer Apellido</label>
                            <input type="text" value="{{$item->primer_apellido}}" class="form-control mb-2" name="primer_apellido" >
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Segundo Apellido</label>
                          <input type="text" value="{{$item->segundo_apellido}}" class="form-control mb-2" name="segundo_apellido" >
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input type="text" value="{{$item->telefono}}" class="form-control mb-2" name="telefono" >
                    </div>
                        
                    </div>
                    <div class="col-md-6 col-sm-6">
                      
                    <div class="mb-3">
                      <label class="form-label">Correo</label>
                      <input type="email" value="{{$item->correo}}" class="form-control mb-2" name="correo" >
                  </div>
                        <div class="mb-3">
                            <label class="form-label">Direccion de Residencia</label>
                            <input type="text" value="{{$item->direccion}}" class="form-control mb-2" name="direccion" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nacionalidad</label>
                            <select class="custom-select mr-sm-2 " name="nacionalidad" id="nacionalidad">
                              @forelse ($nacionalidades as $item1)
                              @if ($item->id_nacionalidad==$item1->id_nacionalidad)
                              <option value="{{$item1->id_nacionalidad}}" selected>{{$item1->pais}}</option>

                              @else
                              <option value="{{$item1->id_nacionalidad}}">{{$item1->pais}}</option>
                              @endif
                              @empty
                              <option value="No hay nacionalidad">...</option>    
                              @endforelse
                              </select>                       
                            </div>
                        <div class="mb-3">
                            <label class="form-label">Parentesco</label>
                            <select class="custom-select mr-sm-2 " name="parentesco" id="parentesco">
                              @forelse ($parentescos as $item1)
                              @if ($item->id_parentesco==$item1->id_parentesco)
                              <option value="{{$item1->id_parentesco}}" selected>{{$item1->nombre}}</option>

                              @else
                              <option value="{{$item1->id_parentesco}}">{{$item1->nombre}}</option>
                              @endif
                              @empty
                              <option value="No hay parentescos">...</option>    
                              @endforelse
                              </select>                        
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Tipo de Identificacion</label>
                              <select class="custom-select mr-sm-2 " name="identificacion" id="identificacion">
                                @forelse ($identificaciones as $item1)
                                @if ($item->id_identificacion==$item1->id_identificacion)
                                <option value="{{$item1->id_identificacion}}" selected>{{$item1->tipo}}</option>

                              @else
                              <option value="{{$item1->id_identificacion}}">{{$item1->tipo}}</option>
                              @endif
                                @empty
                                <option value="No hay parentescos">...</option>    
                                @endforelse
                                </select>                        
                              </div>
                              
                    </div>
                    <div class="col-md-12 col-sm-6">
                      <div class="mb-1">
                        <label class="form-label">Porcentaje Correspondiente</label>
                      </div>
                    <div class="input-group mb-3">
                        {{--  --}}
                      <input type="text" class="form-control"   value="{{$item->pivot->porcentaje}}" name="porcentaje" >
                      <span class="input-group-text" id="basic-addon1">%</span>
                    </div>
                    </div>

                 
            
    </div>
    {{-- <button type="submit" class="btn btn-primary">Guardar</button> --}}
   

</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
