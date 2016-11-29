<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Encuesta;
use App\Ticket;
use Laracasts\Flash\Flash;
use App\Http\Requests;

class EncuestaController extends Controller
{
    public function index()
    {   
    	return view('cliente.crearEncuesta');
    }

    public function create()
    {
        return view('cliente.crearEncuesta');
    }

    public function store(Request $request)
    {
        $encuesta = new Encuesta($request->all());

        $ticket = new Ticket();
        $encuesta->id_ticket =18;

        $encuesta->save();
        Flash::success("Se ha realizado la encuesta de sactifaccion correctamente, gracias por su tiempo.");
        return redirect()->route('cliente.ticket.index');
    }

     public function show($id)
    {
       
    }
}
