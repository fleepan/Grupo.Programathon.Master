@extends('layouts.master')
@section('contenido')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 align="center">Estadisticas de Temperamentos</h2>
    </div>
</div>
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif
<table class="table table-hover">
  <thead>
    <tr class="table-success">
      <th scope="col">Nombre</th>
      <th scope="col">Razas</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($temps as $temp)
    <tr>
      <th scope="row">{{$temp->nombre}}</th>
      <td><a href="{{route('tem.temInfo',['id'=>$temp->id])}}">Ver</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
