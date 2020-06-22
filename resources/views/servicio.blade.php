@extends('layouts.app')

@section('content')
<div style="margin: auto;">
<div style="float: left; width: 50%;">
<table border="0">
<tbody>
@foreach($detalle as $item)
<tr>
<td><label for="" class="form-group">Servicio:</label></td>
</tr>
<tr>
    <td><h3 class="form-group">{{$item->titulo}}</h3></td>
</tr>
<tr>
    <td>Descripcion:</td>
</tr>
<tr>
    <td>{{$item->descripcion}}</td>
</tr>
<tr>
    <td>Valor</td>
</tr>
<tr>
    <td>{{$item->valor}}</td>
</tr>
<tr>
    <td>
        <form class="" action="{{ route ('adquirir',$item->id_servicio)}}" method="post">
        @csrf
        <input type="submit" class="btn btn-danger" value="Adquirir">
        </form>
    </td>
</tr>
<tr>
    <td>
        <form class="form-group" action="{{ route ('reg_comentario',$item->id_servicio)}}" method="post">
        @csrf
        <textarea class="form-control" id="comentirio" name="comentirio" cols="50" rows="3"></textarea>
        <input type="submit" class="btn btn-danger" value="Comentar">
    </td>
</tr>
</form>
<tr>
    <td>
        @if ( session('mensaje') )
            <div class="alert alert-success">{{ session('mensaje') }}</div>
        @endif
    </td>
</tr>
</tbody>
@endforeach
</table>
</div>
<div style="float: left; width: 50%;">
<table border="0">
<tbody>
<tr>
<td>Comentarios</td>
</tr>
@foreach($comentario as $item2)
<tr>
<td>{{$item2->comentirio}}</td>
</tr>
@endforeach
</tbody>
<tr>
    <td>{{$comentario->links()}}</td>
</tr>
</table>
</div>
<div style="clear: both;"></div>
</div>

@endsection
