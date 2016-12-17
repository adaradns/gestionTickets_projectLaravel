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
        //$encuesta_ticket = $request->id_ticket;
        //$ticket = new Ticket();

        $encuesta = new Encuesta();
        $encuesta->pregunta_1 = $request->pregunta_1;
        $encuesta->pregunta_2 = $request->pregunta_2;
        $encuesta->pregunta_3 = $request->pregunta_3;
        $encuesta->id_ticket = $request->id_ticket;

        

        $encuesta->save();
        Flash::success("Se ha realizado la encuesta de sactifaccion correctamente, gracias por su tiempo.");
        return redirect()->route('cliente.ticket.index');
    }

     public function show($id)
    {
       $id_ticket = $id;
       return view('cliente.crearEncuesta')->with('id_ticket', $id_ticket);
    }
}
