<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sercicios;
use App\User;
use App\comentarios;

class GuestController extends Controller
{
    public function index()
    {
        $estado= "Disponible";
        $servicio = sercicios::with('user')
        ->where('estado',$estado)
        ->orderByDesc('created_at')
        ->orderByDesc('id_servicio')
        ->orderByDesc('estado')
        ->paginate(3);
        return view('welcome',compact('servicio'));
    }
    public function perfil($id)
    {
        $id_usuario= $id;
        $servicio_user = sercicios::where('id', $id_usuario)
        ->paginate(5);
        return view('perfil',compact('servicio_user'));
    }
    public function servicio($id)
    {
        $detalle= sercicios::where('id_servicio', $id)->get();
        $comentario= comentarios::where('id_servicio', $id)->paginate(7);
        return view('servicio',compact('detalle'),compact('comentario'));
    }
}
