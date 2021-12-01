@extends('plantilla')
@section('css')
    
@endsection
@section('contenido')
<div class="container py-5 mb-5">
    {{-- @include('clientes.new_cliente') --}}
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow ">
            <!-- Card header -->
            <div class="card-header border-0 bg-transparent">
              <h3 class="text-dark mb-0">Lista de Ahorros Activos</h3>
              <div class="d-flex justify-content-end">
                <a href="{{route('ahorros.create')}}" class="btn btn-md btn-primary" >
                  <i class="fas fa-piggy-bank" style="color:white; font-size:20px;"></i>
                  Nuevo Ahorro
                </a>
              </div>
            </div>
          
            <!--  table -->
            <div class="table-responsive" >
              <table id="tablaContactos" class="table align-items-center table-flush table-dark">
                <thead class="thead-dark">
                  <tr class=" text-center">
                   
                    <th >Cedula</th>
                    <th >Nombre</th>
                    <th >Apellido</th>
                    <th >Contacto</th>
                    <th >Acción</th>
                  </tr>
                </thead>
                {{-- <tbody >
                  @foreach($user_clientes as $item)
                      
                 <tr class="text-center">
                 
                  <td>
                    {{$item->cedula}}
                        <span class="name mb-0 text-sm">{{$item->cedula}}</span>
                    </td>
                    <td>
                      {{$item->nombre}}
                      <span class="name mb-0 text-sm">{{$item->nombre}}</span>
                  </td>
                  <td>
                    {{$item->apellido}}
                    <span class="name mb-0 text-sm">{{$item->apellido}}</span>
                </td>
                  <td class="budget">
                    {{$item->telefono}}
                    <span class="name mb-0 text-sm">{{$item->telefono}}</span>
                    <i class="fab fa-whatsapp-square ver" ></i>
                    </td>
                <td>
                  
                  <form 
                      action="{{ route('clientes.destroy', $item->id) }}"
                      method="POST" class="form-eliminar">
                      @csrf
                          
                      <div class="btn-group dropup">
  
                        <a class="btn btn-md" href="{{route('cuenta', $item->id)}}" style="padding: 3px 10px;border: PowderBlue 1px solid;border-radius: 20px;">
                          <i class="far fa-eye" style="color:white; font-size:20px;"></i>
                          <span class="nav-link-text" style="color: white;">Ver Cuenta</span>
                        </a>
  
                        <button type="button" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}">
                          <i class="fas fa-edit"  style="color:white; font-size:20px;"></i>
                        </button>
                              <button type="button" data-toggle="modal"
                                      data-target="#exampleModalCenter{{ $item->id_cliente}}"
                                      class="btn btn-md text-decorated-none "><i
                                          class="fas fa-edit"  style="font-size:20px;"></i></button>
                      </div>
  
                      @method('DELETE')
                      <button type="submit" class="btn btn-md" >
                        <i class="fas fa-trash-alt" style=" color:white; font-size:20px;"></i></button>
                  </form>
                </td>
              @include('clientes.edit_cliente')
                </tr>
                @endforeach
                </tbody> --}}
              </table>
            </div>
            <!-- Card footer -->
           {{-- <div class="card-footer py-4 bg-default shadow">
               <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> --}}
          </div>
        </div>
      </div>
    
</div>
@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
{{-- <script src="assets/js/dataTable.js"></script> --}}
{{-- <script >iniciarTablaContactos();</script> --}}
{{-- <script src="assets/js/alertas.js"></script>     --}}
@endsection