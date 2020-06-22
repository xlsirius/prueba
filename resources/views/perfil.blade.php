@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Servicios</div>

                <div class="card-body">
                    @if (session('mensaje'))
                        <div class="alert alert-success" role="alert">
                            {{ session('mensaje') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Usuario</th>
                              <th scope="col">Titulo</th>
                              <th scope="col">Descripcion</th>
                              <th scope="col">Estado</th>
                              <th  colspan="5" scope="col">Accion</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($servicio_user as $item)
                              <tr>
                                <th scope="row">{{$item->name_user}}</th>
                                <td>{{$item->titulo}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->estado}}</td>
                                <td>
                                    <form class="" action="{{ route ('adquirir',$item->id_servicio)}}" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="Adquirir">
                                    </form>
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
