@extends('layouts.master')
@section('titulo', 'Información de la Raza')
@section('contenido')
  <div class="jumbotron">
    <h1 class="display-5">Razas Registradas:  {{count($temp->razas)}}</h1>
    @foreach($temp->razas as $raza)
        <a class="badge badge-success" href="{{route('rp.razaInfo',['id'=>$raza->id])}}">
          {{ $raza->nombre }}
        </a>
    @endforeach
</div>
<div class="col">
    <button type="button" class="btn btn-danger" onclick="window.location='{{ URL::route('tem.index')}}'">Atras</button>
</div>
@endsection
