@section('titulo')
    Editar Garantia
@endsection
@extends('plantilla')
@section('css')
    <link rel="stylesheet" href="css/cssLineaCredito.css">
@endsection
@section('titulo-contenido')
    @include('SPR.barranavegacion')
@endsection
@section('contenido')
    
<div class="form-body-tasas">
    <div class="row">
        <div class="form-holder">
            <div class="form-contentTasas">
                <div class="form-itemsTasas">
                    <h3>Gestion de Garantias</h3>
                    <p>Llene los datos correspondientes</p>
                    <form action="{{route('updateGarantia', $garantia)}}" method="POST" class="requires-validation" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12"> 
                            <select class="form-select mt-3" name="asociado" required> 
                                  <option selected value="{{$garantia->asociado->id_asociado}}">{{$garantia->asociado->nombre_completo}}</option>
                                  @foreach ($asociados as $item)
                                    <option value="{{$item->id_asociado}}">{{$item->nombre_completo}}</option>                                      
                                  @endforeach
                            </select>
                       </div>


                        <div class="col-md-12">
                            <select class="form-select mt-3" name="tipo" required>
                                <option selected value="{{$garantia->tipo->id_tipo_credito}}">{{$garantia->tipo->nombre}}</option>
                                @foreach ($tipos as $item)
                                <option value="{{$item->id_tipo_credito}}">{{$item->nombre}}</option>                                      
                                @endforeach
                            </select>
                        </div>


            <div class="card card-user ml-2 mt-2">                    
                <div class="card-body">
                        <div class="col-mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01"> <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                                </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01" name="documento">
                                        <label class="custom-file-label" for="inputGroupFile01">Garantia</label>
                                    </div>
                            </div>
                            <div class="col-mb-3 mt-2">
                                <input class="form-control" type="text" name="descripcionG" value="{{$garantia->descripcion}}" placeholder="Descripcion">
                                <div class="valid-feedback">Username field is valid!</div>
                                <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>
                        </div>
                </div>                
</div>


                
        <div class="form-button mt-3 text-center">
        <button type="submit" class="btn btn-warning">Actualizar</button>
        </div>
 </form>


    </div>
   </div>
  </div>
 </div>
</div>

    
@endsection
@section('js')
<script>


// Muestra el nombre del Archivo
$(".custom-file-input").on("change", function() {
var fileName = $(this).val().split("\\").pop();
$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});





</script>
    
@endsection