<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ticket;

class EmpleadoController extends Controller
{
    public function index()
    {   
        $tickets = Ticket::where('id_estado', 2)->paginate();
        return view('empleado.index-empleado')->with('tickets', $tickets);
    }


    public function indexCreado()
    {
        $tickets = Ticket::where('id_estado', 1)->paginate();
        return view('empleado.bandejaEntrada')->with('tickets', $tickets);

    }

    public function indexFinalizado()
    {
        $tickets = Ticket::where('id_estado', 3)->paginate();
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
        $ticket = Ticket::find($id);
        return view('empleado.descripcion')->with('ticket', $ticket);
    }

    public function descripcionAutoasignar($id)
    {
        $ticket = Ticket::find($id);
        return view('empleado.autoasignar')->with('ticket', $ticket);
    }
}
