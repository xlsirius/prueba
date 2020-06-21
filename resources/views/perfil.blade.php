@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Servicios</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Usuario</th>
                              <th scope="col">Titulo</th>
                              <th scope="col">Descripcion</th>
                              <th  colspan="5" scope="col">Accion</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($servicio_user as $item)
                              <tr>
                                <th scope="row">{{$item->name_user}}</th>
                                <td>{{$item->titulo}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>
                                <a href=""  class="btn btn-danger">Adquirir</a>
                                </td>
                              </tr>
                              @endforeach
                          </tbody>
                    </table>
                    {{$servicio_user->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
