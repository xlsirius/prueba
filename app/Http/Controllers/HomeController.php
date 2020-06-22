<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sercicios;
use App\comentarios;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarioId = auth()->user()->id;
        $servicio = sercicios::where('id', $usuarioId)->paginate(5);
        return view('home',compact('servicio'));
    }

    public function reg_servicios()
    {
        return view('reg_servicios');
    }

    public function proce_servicio(Request $request)
    {
        $usuarioId = auth()->user()->id;
        $usuarioName = auth()->user()->name;

        $servicioNuevo = new sercicios;
        $servicioNuevo->titulo = $request->titulo;
        $servicioNuevo->descripcion = $request->descripcion;
        $servicioNuevo->valor= $request->valor;
        $servicioNuevo->id = $usuarioId;
        $servicioNuevo->name_user = $usuarioName;
        $servicioNuevo->estado = "Disponible";
        $servicioNuevo->save();

        return back()->with('mensaje', 'Servicio agregado!');
    }

    public function reg_comentario(Request $request,$id)
    {
        $id_reg= $id;
        $ComentarioNuevo = new comentarios;
        $ComentarioNuevo->comentirio=$request->get('comentirio');
        $ComentarioNuevo->id_servicio= $id_reg;
        $ComentarioNuevo->save();
        return back()->with('mensaje', 'Comentario agregado!');
        //return($ComentarioNuevo);
    }

    public function editar_servicios($id)
    {
        $servicio= sercicios::where('id_servicio', $id)->get();
        return view('actualizar',compact('servicio'));
    }
    public function proce_actu_servicio(Request $request,$id)
    {
        $usuarioId = auth()->user()->id;

       $servicioNuevo= sercicios::where('id_servicio', $id)
       ->update(
           ['descripcion' => $request->descripcion,'titulo' => $request->titulo,'valor' => $request->valor]);

       return back()->with('mensaje', 'Servicio actulizado!');
    }

 public function proce_eliminar_servicio($id)
 {
     $servicio= sercicios::where('id_servicio', $id)->delete();
     $usuarioId = auth()->user()->id;
     $servicio = sercicios::where('id', $usuarioId)->paginate(5);
     return back()->with('status', 'Servicio eliminado!');;
 }

  public function adquirir($id)
 {
     $estado= "Adquirido";
     $servicioNuevo= sercicios::where('id_servicio', $id)
     ->update(
         ['estado' => $estado]);

     return back()->with('mensaje', 'Servicio Adquirido!');
 }

}
