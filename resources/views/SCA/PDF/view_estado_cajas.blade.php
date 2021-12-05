<!DOCTYPE html>
    <html lang="en">
        <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
            <title>PDF Estado de Cajas</title>

            <style>
              .cajas{
                background-color: white;
                padding: 2%;
                border-radius: 2%;
                border: 3px solid gray;
              }

              .cajas-header{
                background-color: lightgray;
                padding: 1%;
                border-top-left-radius: 2%;
                border-top-right-radius: 2%;
              }

              .cajas-body{
                margin: 2%;
              }
            </style>
        </head>
    <body>
       <div class="text-center">
        <h5>{{$data}}</h5>
       </div>
       <hr>
       <div class="container-fluid mt-3">
          
         @foreach ($estado_cajas as $item)
         <div class="cajas mb-5">
          <div class="cajas-header">
            @if ($item['descripcion_cuenta_cajero']=='meta cumplida')
            <h5>
              Cajero a cargo: {{$item['cajero']}} |
              <span class="badge badge-success mt-1">
              {{$item['descripcion_cuenta_cajero']}} 
              </span>
            </h5>
            @else
            <div class="clearfix">
              <div class="float-left">
                <h5>
                  Cajero a cargo: {{$item['cajero']}} |
                  <span class="badge badge-danger mt-1">
                  {{$item['descripcion_cuenta_cajero']}} 
                  </span>
                </h5>
              </div>
              <div class="float-right">
                @php
                $total = $item['monto_cierre']-$item['monto_inicio'];
                @endphp
                <h5>{{$total}}</h5>
              </div>
            </div>
            @endif
          </div>

          <div class="cajas-body">
            <h6>Estado de la Caja = {{$item['estado']}}.</h6>
            <h6><i class="fas fa-calendar-check mt-1"></i> Inicio de operaciones = {{$item['fecha_inicio']}}</h6>
            <h6><i class="fas fa-coins mt-1"></i> Monto con el que inició = {{$item['monto_inicio']}}</h6>
            <h6><i class="fas fa-calendar-times mt-1"></i> Fin de operaciones = {{$item['fecha_cierre']}}</h6>
            <h6><i class="fas fa-coins mt-1"></i> Monto con el que cerró = {{$item['monto_cierre']}}</h6>
          </div>
        </div>
          @endforeach
       </div>
    </body>
</html>