@extends('layouts.admin')

@section('contenido')
    <form action="{{route('admin.deleted')}}" method="post">
        <div class="jumbotron">
            <div class="modal-body">
                    <p>Esta seguro que desea eliminar esta Raza?</p>
                </div>
                <h1 class="display-3">{{$rp->nombre}}</h1>
                <input type="hidden" name="id" value="{{$rp->id}}"/>
                @csrf
            </div>
            <div>
                <button type="submit" class="btn btn-sm btn-primary">Borrar</button>
                <button type="button" class="btn btn-sm btn-default" onclick="window.location='{{ URL::route('admin.index')}}'">Volver</button>
            </div>
    </form>
@endsection
