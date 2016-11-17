<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Ticket;
use App\User;
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

    public function store(Request $request)
    {
        $ticket = new Ticket($request->all());
        $user = Auth::user();
        
        $ticket->id_cliente = $user->id;
        $ticket->id_estado = 1;


        //Manipulacion de iamgenes
        $file = $request->file('archivo');
          
        $ticket->save();

        Flash::success("Se ha creado el ticket ". $ticket->titulo . " de forma exitosa.");

        return redirect()->route('cliente.ticket.index');
    }

     public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('cliente.descripcion')->with('ticket', $ticket);
    }
}
