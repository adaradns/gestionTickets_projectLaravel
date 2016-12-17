<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laracasts\Flash\Flash;
use App\Http\Requests;

use App\Mensaje;
use App\ticket;
use App\Encuesta;


class MensajesController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
    	$mensaje = new Mensaje();

    	$mensaje->descripcion = $request->descripcion;
    	$mensaje->id_ticket = $request->ticket_id;
    	$mensaje->id_usuario = $request->id_usuario;

    	$mensaje->save();

        return back();
    }
    public function show($id)
    {

    }
}
