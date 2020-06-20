@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actualizar Servicios</div>
                  <div class="form-group">
                    <form class="form-group" action="{{route('proce_actu',$servicio->id_servicio )}}" method="post">
                        @csrf
                        @method('PUT')
                      <label for="comment">Titulo</label>
                      <input type="text" name="titulo"
                      value="{{$servicio->titulo}}" placeholder="Titulo" class="form-control" required autofocus>
                      <label for="comment">Descripcion:</label>
                      <textarea name="descripcion"
                      class="form-control" rows="3" placeholder=""  required>
                          {{$servicio->descripcion}}
                      </textarea>
                          <label for="comment">Valor:</label>
                        <input type="number" name="valor"  class="form-control" value="{{$servicio->valor}}">
                     <center> <input type="submit" class="btn btn-danger" name="actualizar" value="Actualizar"></center>
                    </form>
                  </div>
                  @if ( session('mensaje') )
                      <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
            </div>
        </div>
    </div>
</div>
@endsection
