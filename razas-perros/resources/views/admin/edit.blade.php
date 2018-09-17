@extends('layouts.admin')

@section('contenido')
@include('partials.errors')


    <div class="row">
        <div class="col-md-12">
            <form action="{{route('admin.update')}}" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input
                    type="text"
                    class="form-control"
                    id="nombre"
                    name="nombre"
                    value="{{$rp->nombre}}"
                    >
                </div>
                <div class="form-group">
                    <label for="content">Descripción</label>
                    <textarea
                    class="form-control"
                    id="descripcion"
                    name="descripcion">{{$rp->descripcion}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Altura Inicial</label>
                    <input
                    type="number"
                    class="form-control"
                    id="alturaInicial"
                    name="alturaInicial"
                    value="{{$rp->alturaInicial}}"
                    >
                </div>
                <div class="form-group">
                    <label for="content">Altura Final</label>
                    <input
                    type="number"
                    class="form-control"
                    id="alturaFinal"
                    name="alturaFinal"
                    value="{{$rp->alturaFinal}}"
                    >
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                      <h6 for="content">Temperamento</h6>
                  @foreach($temps as $temp)
                      <div class="form-check">
                             <input
                             class="form-check-input"
                             type="checkbox"
                             name="temperamentos[]"
                             value="{{ $temp->id }}"
                        {{$rp->temperamentos->contains($temp->id) ? 'checked' : '' }}
                            />
                           <label class="form-check-label">{{ $temp->nombre }}</label>
                     </div>
                 @endforeach
                 </div>
                 <div class="form-group col-md-6">
                     <h6 for="content">Tamaño</h6>
                 @foreach($tamanos as $tam)
                     <div>
                            <input
                            class=""
                            type="radio"
                            name="tamano_id"
                            value="{{ $tam->id }}"
                             {{ $rp->tamano_id == $tam->id ? 'checked' : '' }}
                           />
                          <label class="form-check-label">{{ $tam->descripcion }}</label>
                    </div>
                @endforeach
                </div>
              </div>
               {{-- $rp->plataformas->contains($plataforma->id) ? 'checked' : '' --}}

                <input type="hidden" name="id" value="{{$rp->id}}"/>
                @csrf
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-danger" onclick="window.location='{{ URL::route('admin.index')}}'">Atras</button>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
