@extends('layouts.master')
@section('titulo','Lista de Razas')
@section('contenido')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 align="center">Lista de Razas</h2>
  </div>
</div>
<div class="row">
  @foreach ($razas as $r)
  <div class="col">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$r->nombre}}</h5>
        <p class="card-text">
          {{ str_limit($r->descripcion, $limit = 100, $end = ' ... ') }}
        </p>
          <a href="{{route('rp.razaInfo',['id'=>$r->id])}}" class="btn btn-secondary">Ver más</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endsection
