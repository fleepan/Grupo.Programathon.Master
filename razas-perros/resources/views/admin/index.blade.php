@extends('layouts.admin')
@section('contenido')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 align="center">Administar Razas de Perros</h2>
    </div>
</div>
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif
<div class="row">
        <div class="col-md-12">
            <a href="{{route('admin.create')}}" class="btn btn-success">Nuevo</a>
        </div>
    </div>
<table class="table table-hover">
  <thead>
    <tr class="table-success">
      <th scope="col">Nombre</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($razas as $rp)
    <tr>
      <th scope="row">{{$rp->nombre}}</th>
      <td><a href="{{route('admin.edit',['id'=>$rp->id])}}">Editar</a></td>
      <td><a href="{{route('admin.delete',['id'=>$rp->id])}}">Borrar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
