@extends('plantilla')
@section('css')
    
@endsection

@section('titulo')
  {{'Asociado - SAC'}}
@endsection

@section('contenido')

@section('titulo-contenido')
<div class="col-8">

    <div id="perfil-img"><i class="fas fa-portrait"></i></div>
    <h1 class="mx-5 my-3">Nombre Asociado Logeado</h1>
</div>
@endsection

<div class="container" id="box-cuentas">

    <div class="row">

        <div class="col-xl-4 col-md-6">
              <div class="card bg-secondary text-white mb-4">
                  <div class="card-body">Mis Ahorros</div>
                  <div class="card-footer d-flex align-items-center justify-content-between bg-secondary">
                      <a class="small text-white stretched-link" href="#">Ver ahorros</a>
                      <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                  </div>
              </div>
        </div>

        <div class="col-xl-4 col-md-6">
              <div class="card bg-secondary text-white mb-4">
                  <div class="card-body">Prestamos</div>
                  <div class="card-footer d-flex align-items-center justify-content-between bg-secondary">
                      <a class="small text-white stretched-link" href="#">Ver prestamos</a>
                      <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                  </div>
              </div>
        </div>

        <div class="col-xl-4 col-md-6">
              <div class="card bg-secondary text-white mb-4">
                  <div class="card-body">Excedentes</div>
                  <div class="card-footer d-flex align-items-center justify-content-between bg-secondary">
                      <a class="small text-white stretched-link" href="#">Ver excedentes</a>
                      <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                  </div>
              </div>
        </div>

    </div>

    <div class="my-4" id="tablas-cuentas">

      <h4 class="py-2">Ahorros</h4>
      <table class="table table-bordered border-primary">
        <thead class="">
          <tr>
                <th>#asoc</th>
                <th>Fecha Inicio</th>
                <th>Fecha Final</th>
                <th>Monto Ahorrado</th>
                <th>Estado</th>

            </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{'ASC0001'}}</td>
            <td>{{'02/02/2021'}}</td>
            <td>{{'10/02/2022'}}</td>
            <td>{{'₡ 150000'}}</td>
            <td>{{'Activo'}}</td>
          </tr>
        </tbody>
      </table>

      <div style="height: 3vh"></div>

      <h4 class="py-2">Prestamos</h4>
      <table class="table table-bordered border-primary">
        <thead class="">
          <tr>
                <th>#asoc</th>
                <th>Interes actual</th>
                <th>Total de Prestamo</th>
                <th>Debe del Prestamo</th>
                <th>Estado</th>

            </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{'ASC0003'}}</td>
            <td>{{'3,5%'}}</td>
            <td>{{'₡ 3000000'}}</td>
            <td>{{'₡ 845000'}}</td>
            <td>{{'Activo'}}</td>
          </tr>
        </tbody>
      </table>

    </div>


  </div>

@endsection

@section('js')
    
@endsection