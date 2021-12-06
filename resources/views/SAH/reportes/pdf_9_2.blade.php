<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Beneficiarios-autorizados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
   
    <link rel="stylesheet" href="{{public_path('css/reportes/pdf/style.css')}}" media="all" type="text/css" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        {{-- <img src="logo.png"> --}}
      </div>
      <h1>Reporte de cuenta</h1>

  <div class="px-4">
    <div id="company" class="clearfix">
        <div><span>INST.</span>{{$ahorro->asociado->institucion->codigo}}</div>
        <div><span>FECHA NACIMIENTO</span> {{$ahorro->asociado->fecha_nacimiento}}</div>
        <div><span>FECHA INGRESO</span>{{$ahorro->asociado->fecha_ingreso}}</div>
        <div><span>DIR.</span>{{$ahorro->asociado->direccion}}</div>
        <div><span>PROF.</span>{{$ahorro->asociado->profesion->nombre}}</div>
        <div><span>EMAIL</span> <a href="mailto:{{$ahorro->asociado->correo}}">{{$ahorro->asociado->correo}}</a></div>
        <div><span>TIPO AHORRO</span>{{$ahorro->tipo_ahorro->nombre}}</div>
    {{-- <div><span>Cuenta</span>{{$ahorro->nombre}}</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div> --}}
      </div>
      <div id="project">
        <div><span>CODIGO</span>{{$ahorro->asociado->codigo}}</div>
        <div><span>CLIENTE</span>{{$ahorro->asociado->nombre_completo}}</div>
        <div><span>CEDULA</span>{{$ahorro->asociado->cedula}}</div>
        <div><span>ESTADO CIVIL</span>{{$ahorro->asociado->estadoCivil->nombre}}</div>
        <div><span>NACIONALIDAD</span>{{$ahorro->asociado->nacionalidad->pais}}</div>
        <div><span>AHORRO</span>{{$ahorro->nombre}}</div>
      </div>
  </div>
    </header>
    <main>
      <h3 class="text-center">Penalizaciones del ahorro</h3>
      <h5 class="text-center">{{$ahorro->nombre}}</h5>
      <table>
        <thead>
          <tr class="text-center">
            <th class="desc">TIPO</th>
            <th class="service">DESCRIPCION</th>
            <th class="desc">FECHA</th>     
          </tr>
        </thead>
        <tbody>
       @forelse ($ahorro->penalizaciones as $penalizacion)
       <tr class="text-center">
        <td class="service">{{$penalizacion->tipo}}</td>
        <td class="desc">{{$penalizacion->descripcion}}</td>
        <td class="unit">{{$penalizacion->fecha}}</td>
      </tr>
       @empty
           <h5>No tiene Cuentas Activas o registradas</h5>
       @endforelse
         
        </tbody>
      </table>
     
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">reporte emitido para fines informativos.</div>
      </div>
    </main>
    <footer>
      Proyecto sistema de ahorros SAC siquirres.
    </footer>
  </body>
</html>