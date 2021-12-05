<div class="container">
    <!-- Modal EDITAR-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm " role="document">
            <div class="modal-content">
                <div class="modal-header bg-light-blue ">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTRAR</h5>
                    <button type="button" class="btn-close bg-gradient-danger" data-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    {{-- <form action="" enctype="multipart/form-data" class="form-group p-4 form-grid" method="POST"> --}}
                    {{-- @csrf --}}
                    <form action="{{ route('tasa_interes.store') }}" enctype="multipart/form-data" class="form-group form-grid" method="POST">
                        @csrf
                       
                        <div class="row ">

                            <div class="col-12">


                                <div class="mb-2">
                                    <label class="form-label">ID</label>
                                    <input type="text" class="form-control mb-2"
                                        name="id_tasa" required>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">Descripcion</label>
                                    <input type="text" class="form-control mb-2"
                                        name="descripcion" required>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">Valor</label>
                                    <input type="text" class="form-control mb-2"
                                        name="valor_tasa" required>
                                </div>



                            </div>

                            <style>
                                .trans {
                                    width: 400px;
                                    /* background-color: red; */
                                    display: flex;
                                    justify-content: center;
                                }

                            </style>

                            <div class="trans">

                                <button type="submit" class="btn badge-info">Registrar</button>
                            </div>
                        </div>
                    </form>


                </div>


            </div>
            <div class="modal-footer bg-dark-footer">

            </div>
        </div>
    </div>
</div>
