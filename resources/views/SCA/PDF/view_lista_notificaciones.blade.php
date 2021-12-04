<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
            <title>PDF Lista Notificaciones</title>
        </head>
    <body>

       <div class="text-center">
        <h5><i class="fas fa-building mt-1"></i> {{$data}}</h5>
       </div>
       <hr>
       <div class="container-fluid mt-3">
        <table class="table table-condensed">
            <thead class="bg-dark text-light">
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notificaciones as $item)
                <tr>
                    <td>{{$item['nombre']}}</td>
                    <td>{{$item['tipo']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </body>
</html>