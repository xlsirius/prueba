<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sercicios;

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

        $servicioNuevo = new sercicios;
        $servicioNuevo->titulo = $request->titulo;
        $servicioNuevo->descripcion = $request->descripcion;
        $servicioNuevo->valor= $request->valor;
        $servicioNuevo->id = $usuarioId;
        $servicioNuevo->save();

        return back()->with('mensaje', 'Servicio agregado!');
    }

    public function editar_servicios($id)
    {
        $servicio= sercicios::findOrFail($id);
        return view('actualizar',compact('servicio'));
    }
    public function proce_actu_servicio(Request $request,$id)
    {
        $usuarioId = auth()->user()->id;

       $servicioNuevo= sercicios::findOrFail($id);
       $servicioNuevo->titulo = $request->titulo;
       $servicioNuevo->descripcion = $request->descripcion;
       $servicioNuevo->valor= $request->valor;
       $servicioNuevo->id = $usuarioId;
       $servicioNuevo->save();

       return back()->with('mensaje', 'Servicio actulizado!');
    }
}
