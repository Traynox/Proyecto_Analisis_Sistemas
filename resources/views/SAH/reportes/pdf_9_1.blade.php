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

      <div id="company" class="clearfix">
        <div><span>FECHA INICIAL</span>{{$ahorro->fecha_inicio}}</div>
        <div><span>FECHA FINAL</span> {{$ahorro->fecha_final}}</div>
    {{-- <div><span>Cuenta</span>{{$ahorro->nombre}}</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div> --}}
      </div>
      <div id="project">
        <div><span>Cuenta</span>{{$ahorro->nombre}}</div>
        <div><span>CLIENTE</span>{{$ahorro->asociado->nombre_completo}}</div>
        <div><span>DIRECCIÓN</span>{{$ahorro->asociado->direccion}}</div>
        <div><span>EMAIL</span> <a href="mailto:{{$ahorro->asociado->correo}}">{{$ahorro->asociado->correo}}</a></div>
        
      </div>
    </header>
    <main>
      <h5 class="text-center">Beneficiarios del ahorro</h5>
      <table>
        <thead>
          <tr>
            <th class="desc">CEDULA</th>
            <th class="service">NOMBRE</th>
            <th class="desc">APELLIDO</th>
            <th>CELULAR</th>
            <th>NACIONALIDAD</th>
            <th>PARENTESCO</th>
            <th>PORCENTAJE DEL AHORRO</th>
          </tr>
        </thead>
        <tbody>
       @forelse ($ahorro->beneficiarios as $beneficiario)
       <tr class="text-center">
        <td class="service">{{$beneficiario->cedula}}</td>
        <td class="desc">{{$beneficiario->nombre}}</td>
        <td class="unit">{{$beneficiario->primer_apellido}}</td>
        <td class="qty">{{$beneficiario->celular}}</td>
        <td class="total">{{$beneficiario->nacionalidad->pais}}</td>
        <td class="total">{{$beneficiario->parentesco->nombre}}</td>
        <td class="total">{{$beneficiario->pivot->porcentaje}}%</td>
      </tr>
       @empty
           <h5>No tiene beneficiarios registrados</h5>
       @endforelse
         
     
        </tbody>
      </table>
      <h5 class="text-center">Autorizados del ahorro</h5>
      <table>
        <thead>
          <tr>
            <th class="desc">CEDULA</th>
            <th class="service">NOMBRE</th>
            <th class="desc">APELLIDO</th>
            <th>CELULAR</th>
            <th>NACIONALIDAD</th>
            <th>PARENTESCO</th>
            
          </tr>
        </thead>
        <tbody>
          @forelse ($ahorro->autorizados as $autorizado)
          <tr class="text-center">
           <td class="service">{{$autorizado->cedula}}</td>
           <td class="desc">{{$autorizado->nombre}}</td>
           <td class="unit">{{$autorizado->primer_apellido}}</td>
           <td class="qty">{{$autorizado->telefono}}</td>
           <td class="total">{{$autorizado->nacionalidad->pais}}</td>
           <td class="total">{{$autorizado->parentesco->nombre}}</td>
    
         </tr>
          @empty
              <h5>No tiene autorizados registrados</h5>
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