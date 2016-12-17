<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Ticket;
use App\User;
use App\Mensaje;
use App\Encuesta;


class EmpleadoController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $tickets = Ticket::where('id_estado', 2)->where('id_responsable', $user->id)->paginate();
        return view('empleado.index-empleado')->with('tickets', $tickets);
    }


    public function indexCreado()
    {
        $tickets = Ticket::where('id_estado', 1)->paginate();
        return view('empleado.bandejaEntrada')->with('tickets', $tickets);

    }

    public function indexFinalizado()
    {
        $user = Auth::user();

        $tickets = Ticket::where('id_estado', 3)->where('id_responsable', $user->id)->paginate();
        return view('empleado.ticketsFinalizados')->with('tickets', $tickets);

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        
    }

     public function show($id)
    {
        $mensajes = Mensaje::where('id_ticket', '=', $id)->get();
        $encontrado = Encuesta::where('id_ticket', '=', $id)->count();
        $encuesta = Encuesta::where('id_ticket', $id)->first();

        $ticket = Ticket::find($id);
        $ticket->cliente;
        $ticket->responsable;
        return view('empleado.descripcion', compact('ticket', 'encontrado', 'mensajes', 'encuesta'));
    }

    public function descripcionAutoasignar($id)
    {
        $mensajes = Mensaje::where('id_ticket', '=', $id)->get();
        
        $ticket = Ticket::find($id);
        $ticket->cliente;
        $ticket->responsable;
        return view('empleado.autoasignar', compact('ticket', 'mensajes'));
    }
}
