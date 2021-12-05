<!DOCTYPE html>
    <html lang="en">
        <head>

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
            <title>PDF Lista Cajeros</title>

           {{--  <style>
              #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
              }
              
              #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
              }
              
              #customers tr:nth-child(even){background-color: #f2f2f2;}
              
              #customers tr:hover {background-color: #ddd;}
              
              #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #1a1a1b;
                color: white;
                text-align: center;
              }
          </style> --}}
        </head>
    <body>

       <div class="text-center">
        <h5><i class="fas fa-users mt-1"></i> {{$data}}</h5>
       </div>
       <hr>
       <div class="container-fluid mt-3">
        <table class="table table-condensed" id="customers">
            <thead class="bg-dark text-light">
              <tr>
                 <th>Código</th>
                 <th>Nombre</th>
                 <th>Fecha Ingreso</th>
                 <th>Profesión</th>
                 <th>Contacto</th>
                 <th>Institución</th> 
              </tr>
            </thead>
            <tbody>
              @foreach ($cajeros as $item)
              <tr>
                <td>{{$item['codigo']}}</td>
                <td>{{$item['nombre_completo']}}</td>
                <td>{{$item['fecha_ingreso']}}</td>
                <td>{{$item['profesion']}}</td>
                <td>{{$item['contacto']}}</td>
                <td>{{$item['institucion']}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
       </div>
    </body>
</html>