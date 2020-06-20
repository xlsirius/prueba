@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registar Servicios</div>
                          <div class="form-group">
                                <form class="form-group" action="{{ route ('proce_servicio')}}" method="post">
                                    @csrf
                                  <label for="comment">Titulo</label>
                                  <input type="text" name="titulo" placeholder="Titulo" class="form-control" required autofocus>
                                  <label for="comment">Descripcion:</label>
                                  <textarea class="form-control" rows="3" placeholder="descripcion" name="descripcion"  required></textarea>
                                  <label for="comment">Valor:</label>
                                  <input type="number" name="valor"  placeholder="valor del servicio"  required>
                                  <br><br>
                                  <input type="submit" class="btn btn-danger" name="registar" value="Registrar">
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
