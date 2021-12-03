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
                        <h3>Gestion de Garantias y Tasas Preferenciales</h3>
                        <p>Llene los datos correspondientes</p>
                        <form class="requires-validation" novalidate>
                    
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="numIdentificscion" placeholder="# Identificacion" required>
                                <div class="valid-feedback">Username field is valid!</div>
                                <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>


                            <div class="col-md-12">
                                <select class="form-select mt-3" required>
                                    <option selected disabled value="">Tipos de Credito</option>
                                    <option value="jweb">Credito 1</option>
                                    <option value="sweb">Credito 2</option>
                                    <option value="pmanager">Credito 3</option>
                                </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                            </div>




    <div class="row mt-4">


    <div class="col-6">

                <div class="card card-user ml-2">
                            <h5>   Garantias</h5>
                        
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data"
                            class="form-group form-grid" method="POST">
                            @csrf
                            <div class="col-mb-3">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01"> <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i></span>
                                    </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Garantia</label>
                                        </div>
                                </div>
                                <br><br>
                            </div>
                    
                        </form>

                    </div>
                    
                </div>
    </div>




    <div class="col-6">

        <div class="card card-user ml-1">
                <h5> Tasa Preferencial</h5>
            
                <div class="card-body">
                    <form action="" enctype="multipart/form-data"
                        class="form-group form-grid" method="POST">
                        @csrf
                        <div class="col-mb-3 ">
                            <input class="form-control" type="text" name="descripcion" placeholder="Descripcion" required>
                            <div class="valid-feedback">Username field is valid!</div>
                            <div class="invalid-feedback">Username field cannot be blank!</div>
                        
                        </div>

                        <div class="col-mb-3 mt-1">
                            <input class="form-control" type="number" name="valor" placeholder="Valor" required>
                            <div class="valid-feedback">Username field is valid!</div>
                            <div class="invalid-feedback">Username field cannot be blank!</div>
                        
                        </div>

                        
                        
                    </form>

                </div>
        
            </div>

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





    </script>
        
    @endsection