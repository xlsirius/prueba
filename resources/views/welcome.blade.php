@extends('layouts.app')

@section('content')
<center><h1>Servicios</h1>
<table border="0" style="max-width: 4000px;">
    <tr>
         @foreach ($servicio as $item)
         <td></td><td></td><td></td>
        <td colspan="0">
            <div class="container" style="max-width: 4000px;" >
             <form class="form-group" action="">
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Nombre del servicio:</label>
                  <input type="text" class="form-control" id="exampleDropdownFormEmail1"
                  placeholder="{{$item->titulo}}">
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormPassword1">Descripcion</label>
              </div>
              <div class="form-group">
                    <textarea class="form-group" name="name" rows="3" cols="40">
                        {{$item->descripcion}}
                    </textarea>
                 </div>
                <button type="submit" class="btn btn-primary">Ver mas</button>
              </form>
            </div>
        </td>
        <td></td><td></td><td></td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <td>{{$servicio->links()}}</td>
    </tr>
</table>
</center>

@endsection
