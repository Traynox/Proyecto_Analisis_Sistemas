@extends('plantilla')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style_SCA.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
@endsection

@section('contenido')
<div class="container text-center mb-4">
   <h5> Estado de pago de la institución <b>UCR</b></h5>
</div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
       <table class="table table-bordered">
           <thead class="bg-dark text-light">
               <tr>
                   <th>id_planilla</th>
                   <th>Nombre Asociado</th>
                    <th>Estado de pago</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td></td>
               </tr>
           </tbody>
       </table>
    </div>
  </div>
@endsection


@section('js')
    
@endsection