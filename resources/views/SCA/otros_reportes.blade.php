@extends('plantilla')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style_SCA.css')}}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
@endsection


@section('contenido')
    
<div class="container p-5 text-center">
<a href="{{route('li_caj')}}" class="btn btn-primary btn-lg">PDF Lista de cajeros</a>
<a href="{{route('estado_cajas')}}" class="btn btn-primary btn-lg">PDF Estado de cajas</a>
<a href="{{route('lis_noti')}}" class="btn btn-primary btn-lg">PDF Notificaciones</a>
</div>

<div class="container mt-3">
    <div class="container">
       
    </div>
</div>

@endsection


@section('js')
    
@endsection