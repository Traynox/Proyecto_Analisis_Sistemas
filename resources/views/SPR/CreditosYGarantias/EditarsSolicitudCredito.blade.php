@section('titulo')
    Editar Solicitud de credito
@endsection
@extends('plantilla')
@section('css')
    <link rel="stylesheet" href="css/cssLineaCredito.css">
@endsection
@section('titulo-contenido')
    @include('SPR.barranavegacion')
@endsection
@section('contenido')
    
<div class="form-body-Desem">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Solicitud de Credito</h3>
                    <p>Llene los datos correspondientes</p>
                    <form action="{{route('updateSolicitud', $solicitud)}}" method="POST" class="requires-validation" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12"> 
                            <select class="form-select" name="asociado" required> 
                                  <option selected value="{{$solicitud->asociado->id_asociado}}">{{$solicitud->asociado->nombre_completo}}</option>
                                  @foreach ($asociados as $item)
                                    <option value="{{$item->id_asociado}}">{{$item->nombre_completo}}</option>                                      
                                  @endforeach
                            </select>
                       </div>

                        <div class="col-md-12"> 
                            <select class="form-select" name="tipo" required> 
                                  <option selected value="{{$solicitud->tipo->id_tipo_credito}}">{{$solicitud->tipo->nombre}}</option>
                                  @foreach ($tipos as $item)
                                    <option value="{{$item->id_tipo_credito}}">{{$item->nombre}}</option>                                      
                                  @endforeach
                            </select>
                       </div>

                       @php
                           switch ($solicitud->estado) {
                               case 0:
                                   $est = 'Rechazada';
                                   break;
                               
                                   case 1:
                                   $est = 'En revision';
                                   break;

                                   case 2:
                                   $est = 'Aprobada';
                                   break;
                           }
                       @endphp

                       <div class="col-md-12"> 
                        <select class="form-select" name="estado" required> 
                              <option selected value="{{$solicitud->estado}}">@php
                                  echo $est;
                              @endphp</option>
                                <option value="0">Rechazada</option>                                      
                                <option value="1">En revision</option>                                      
                                <option value="2">Aprovada</option>                                      
                        </select>
                   </div>

                    <div class="col-md-12 mt-2">
                    <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01"> <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                            </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01" name="ident">
                                   <label class="custom-file-label" for="inputGroupFile01">Doc.Identificacion</label>
                                </div>
                                   <button id="" class="btn btn-outline-danger ml-2" href="" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                        </div>
                   
                    </div>

                    <div class="col-md-12 mt-2">
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01"> <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                            </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01" name="domicilio">
                                   <label class="custom-file-label" for="inputGroupFile01">Comprobante de Domicilio</label>
                                </div>
                                   <button id="" class="btn btn-outline-danger ml-2" href="" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                        </div>                          
                    </div>

                    <div class="col-md-12 mt-2">
                    <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01"> <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                            </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01" name="ingresos">
                                   <label class="custom-file-label" for="inputGroupFile01">Comprobante de Ingresos</label>
                                </div>
                                   <button id="" class="btn btn-outline-danger ml-2" href="" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                        </div>                          
                    </div>
                    <div class="col-md-12 mt-2">
                     <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01"> <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                            </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01" name="carta">
                                   <label class="custom-file-label" for="inputGroupFile01">Carta Patronal</label>
                                </div>
                                   <button id="" class="btn btn-outline-danger ml-2" href="" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                        </div>
                     </div>


                     <div class="col-md-12 mt-2">
                     <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01"> <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                            </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01" name="historial">
                                   <label class="custom-file-label" for="inputGroupFile01">Historial Crediticio</label>
                                </div>
                                   <button id="" class="btn btn-outline-danger ml-2" href="" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                        </div>
                     </div>
                     

                     <div class="col-md-12 mt-2">
                     <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01"> <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                            </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01" name="poliza">
                                   <label class="custom-file-label" for="inputGroupFile01">Poliza de Seguros</label>
                                </div>
                                   <button id="limpiar" class="btn btn-outline-danger ml-2" href="" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                        </div>

                     </div>
                        <div class="form-button mt-3 text-center">
                            <button id="submit" type="submit" class="btn btn-warning">Actualizar</button>
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