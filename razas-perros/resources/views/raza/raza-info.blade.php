@extends('layouts.master')
@section('titulo', 'Información de la Raza')
@section('contenido')
  <div class="jumbotron">
    <h1 class="display-3">{{$rp->nombre}}</h1>
    <p class="lead">{{$rp->descripcion}}</p>
    <span class="badge badge-success">Altura Inicial: {{ $rp->alturaInicial}} cm
    </span>
    <span class="badge badge-success">Altura Final: {{ $rp->alturaFinal}} cm
    </span>
    <div>
      <span class="badge badge-success">
          Tamaño: {{$tam->descripcion }}
        </span>
    </div>
    <div>

      @foreach($rp->temperamentos as $temperamento)
        <a class="badge badge-success" href="{{route('tem.temInfo',['id'=>$temperamento->id])}}">
          {{ $temperamento->nombre }}
        </a>
      @endforeach
    </div>
</div>

<div class="col">
    <button type="button" class="btn btn-danger" onclick="window.location='{{ URL::route('rp.index')}}'">Atras</button>
</div>
@endsection
