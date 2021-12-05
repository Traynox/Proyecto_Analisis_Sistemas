<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('prestamos')}}">SPR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link text-center" aria-current="page" href="{{route('Lineascreditos')}}">Lineas de credito</a>
          <a class="nav-link text-center" href="{{route('arreglos')}}">Arreglos de pago</a>
          <a class="nav-link text-center" href="{{route('cobros')}}">Cobros judiciales</a>
          <a class="nav-link text-center" href="{{route('historial')}}">Historial de pagos</a>
          <a class="nav-link text-center" href="{{route('tablasPagos')}}">Tablas de pago</a>
          <a class="nav-link text-center" href="{{route('vistaSolicitudes')}}">Solicitudes de credito</a>
          <a class="nav-link text-center" href="{{route('garantias')}}">Garantias de tasas</a>
        </div>
      </div>
    </div>
  </nav>