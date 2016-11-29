<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Ticket;
use App\User;

use App\Historial;
use App\Encuesta;
use App\Http\Requests\TicketRequest;
use Laracasts\Flash\Flash;


class TicketController extends Controller
{
     public function index()
    {   
        $tickets = Ticket::orderBy('id', 'ASC')->paginate();
    	return view('cliente.index-cliente')->with('tickets', $tickets);
    }



    public function create()
    {
        return view('cliente.crearticket');
    }

    public function store(TicketRequest $request)
    {

        $ticket = new Ticket($request->all());
        $user = Auth::user();
        
        $ticket->id_cliente = $user->id;
        $ticket->id_estado = 1;
        
        //Manipulacion de archivos
        $file = $request->file('archivo');
        $nameFile = 'gestiondeTickets_' | time().'.'. $file->getClientOriginalName();
        
        $ticket->save();

        //Capturo los datos del ticket y los almaceno en historial
        $historial = new Historial();
        $historial->id_ticket = $ticket->id;
        $historial->id_usuario = $user->id;
        $historial->motivo = $ticket->id_problema;
        $historial->fecha = $ticket->created_at;
        
        $historial->save();


        Flash::success("Se ha creado el ticket ". $ticket->titulo . " de forma exitosa.");

        return redirect()->route('cliente.ticket.index');
    }

    
    public function finalizarTicket($id)
    {
        $ticket = Ticket::find($id);
        $ticket->id_estado = 3;
        $ticket->save();
        return response()->json([
            'ticket' => $ticket
        ]);

        $historial = new Historial();
        $historial->id_ticket = $ticket->id_estado;
        $historial->save();
    }

    public function autoasignarTicket($id)
    {
        $ticket = Ticket::find($id);
        $ticket->id_estado = 2;
        $user = Auth::user();
        $ticket->id_responsable = $user->id;
        $ticket->save();
        return response()->json([
            'ticket' => $ticket
        ]);

        $historial = new Historial();
        $historial->id_ticket = $ticket->id_estado;
        $historial->save();
    }

    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('cliente.descripcion')->with('ticket', $ticket);
    }
}
