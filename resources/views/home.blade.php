@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mis Servicios</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Codigo</th>
                              <th scope="col">Titulo</th>
                              <th scope="col">Descripcion</th>
                              <th  colspan="5" scope="col">Accion</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($servicio as $item)
                              <tr>
                                <th scope="row">{{$item->id_servicio }}</th>
                                <td>{{$item->titulo}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>
                                  <a href="{{ route ('editar_servicios', $item->id_servicio)}}" class="btn btn-danger">Actulizar</a>
                                </td>
                                <td>
                                      <form  action="{{ route ('eliminar_reg',$item->id_servicio) }}" class="d-inline" method="post">
                                          @csrf
                                          @method('DELETE')

                                            <input type="submit" name="eliminar" class="btn btn-danger" value="eliminar">
                                      </form>
                                  </td>

                              </tr>
                              @endforeach
                          </tbody>
                    </table>
                    {{$servicio->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
