@extends('layouts.master')
@section('titulo', 'Información de la Raza')
@section('contenido')
  <div class="jumbotron">
    <h1 class="display-3">{{$tam->descripcion}}</h1>
Cantidad Registrados: <span class="badge badge-success"> {{count($rp)}}</span>
<div>
  @foreach($rp as $r)
    <a class="badge badge-success" href="{{route('rp.razaInfo',['id'=>$r->id])}}">
      {{ $r->nombre }}
    </a>
  @endforeach
</div>
</div>

<div class="col">
    <button type="button" class="btn btn-danger" onclick="window.location='{{ URL::route('tam.index')}}'">Atras</button>
</div>
@endsection
