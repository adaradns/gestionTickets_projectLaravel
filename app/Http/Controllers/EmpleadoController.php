<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ticket;

class EmpleadoController extends Controller
{
    public function index()
    {   
        $tickets = Ticket::orderBy('id', 'ASC')->paginate();
    	return view('empleado.index-empleado')->with('tickets', $tickets);
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
}
