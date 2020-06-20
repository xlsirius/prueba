<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sercicios;

class GuestController extends Controller
{
    public function index()
    {
        $servicio = sercicios::paginate(3);
        return view('welcome',compact('servicio'));
    }
}
