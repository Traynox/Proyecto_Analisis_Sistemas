@extends('plantilla')
@section('css')
    <link rel="stylesheet" href="css/cssLineaCredito.css">
@endsection
@section('contenido')
    
<div class="form-body-prestamos">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Prestamos sobre Documentos</h3>
                    <p>Llene los datos correspondientes</p>
                    <form class="requires-validation" novalidate>
                  
                        <div class="col-md-12">
                           <input class="form-control" type="text" name="numIdentificscion" placeholder="# Identificacion" required>
                           <div class="valid-feedback">Username field is valid!</div>
                           <div class="invalid-feedback">Username field cannot be blank!</div>
                        </div>


                    <div class="col-md-12 mt-2">
                    <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01"> <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                            </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01">
                                   <label class="custom-file-label" for="inputGroupFile01">Certificado Depósito</label>
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
                                     aria-describedby="inputGroupFileAddon01">
                                   <label class="custom-file-label" for="inputGroupFile01">Títulos</label>
                                </div>
                                   <button id="" class="btn btn-outline-danger ml-2" href="" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                        </div>
                            
                    </div>



                  
              

                        <div class="form-button mt-3 text-center">
                            <button id="submit" type="submit" class="btn btn-warning">Guardar</button>
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


//$(document).ready(function(){
//$('#limpiar').click(function(){
//$('input[type="file"]').val('');
//});
//});


</script>
    
@endsection