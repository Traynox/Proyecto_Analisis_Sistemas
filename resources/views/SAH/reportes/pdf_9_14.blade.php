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

      {{-- <div id="company" class="clearfix">
        <div><span>INST.</span>{{$asociado->institucion->codigo}}</div>
        <div><span>FECHA NACIMIENTO</span> {{$asociado->fecha_nacimiento}}</div>
        <div><span>FECHA INGRESO</span>{{$asociado->fecha_ingreso}}</div>
        <div><span>DIR.</span>{{$asociado->direccion}}</div>
        <div><span>PROF.</span>{{$asociado->profesion->nombre}}</div>
        <div><span>EMAIL</span> <a href="mailto:{{$asociado->correo}}">{{$asociado->correo}}</a></div>
      </div>
      <div id="project">
        <div><span>Codigo</span>{{$asociado->codigo}}</div>
        <div><span>CLIENTE</span>{{$asociado->nombre_completo}}</div>
        <div><span>CEDULA</span>{{$asociado->cedula}}</div>
        <div><span>ESTADO CIVIL</span>{{$asociado->estadoCivil->nombre}}</div>
        <div><span>NACIONALIDAD</span>{{$asociado->nacionalidad->pais}}</div>
      </div> --}}
    </header>
    <main>
      <h5 class="text-center">{{$tipo_reporte ?? 'Reporte de cuenta'}}</h5>
      <table>
        <thead>
          <tr>
            <th class="desc">AHORRO</th>
            <th class="service">PLAZO</th>
            <th class="desc">MONEDA</th>
            <th>MONTO AHORRADO</th>
            <th>CREADO</th>
            <th>TERMINA</th>
            
          </tr>
        </thead>
        <tbody>
       @forelse ($ahorros as $ahorro)

       @forelse ($ahorro->transacciones as $transaccion)
       <tr class="text-center">
        <td class="service">{{$ahorro->nombre}}</td>
        <td class="desc">{{$ahorro->duracion}} meses</td>
        <td class="unit">{{$ahorro->moneda}}</td>
        <td class="total">{{$ahorro->monto_ahorrado}}</td>
        <td class="total">{{$ahorro->fecha_inicio}}</td>
        <td class="total">{{$ahorro->fecha_final}}</td>
      </tr>  
       @empty
       <h5>No tiene trasacciones registradas</h5>
       @endforelse
       @empty
           <h5>No tiene Ahorros registrados</h5>
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