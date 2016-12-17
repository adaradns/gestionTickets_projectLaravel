<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Ticket;
use App\User;
use App\Mensaje;


use DB;
use App\Historial;
use App\Encuesta;
use App\Sla;
use DateTime;
use DateInterval;
use App\Http\Requests\TicketRequest;
use Laracasts\Flash\Flash;


class TicketController extends Controller
{
     public function index()
    {
        //$tickets = Ticket::orderBy('id', 'ASC')->paginate();
        $tickets = Ticket::with(['cliente','responsable'])->get();
        return view('cliente.index-cliente', compact('tickets'));
        //
    	//return view('cliente.index-cliente')->with('tickets', $tickets);
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
        if($file != null){
            $ticket->nombre_archivo = $file->getClientOriginalName();
        }    
        $ticket->archivo = $file;


        $sla = Sla::find($ticket->id_sla);
        $fecha_vencimiento = 'P'.$sla->dias.'D';
        $dias= new DateInterval($fecha_vencimiento);
        $dateAdded = new DateTime($ticket->created_at);
        $dateAdded->add($dias);
        $ticket->fecha_vencimiento = $dateAdded;
        

        $ticket->save();

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
        $ticket->fecha_cierre = new DateTime(); 
        $ticket->save();
        return response()->json([
            'ticket' => $ticket
        ]);

        
    }

    public function redirigirBandejaEntrada($id)
    {
        $ticket = Ticket::find($id);
        $ticket->id_estado = 1; 
        $ticket->save();
        return redirect()->route('cliente.ticket.index');
    }

    public function autoasignarTicket($id)
    {
        $ticket = Ticket::find($id);
        $ticket->id_estado = 2;
        $user = Auth::user();
        $ticket->id_responsable = $user->id;
        $ticket->save();
        /*return response()->json([
            'ticket' => $ticket
        ]);*/

    }

    public function show($id)
    {
        $mensajes = Mensaje::where('id_ticket', '=', $id)->get();
        $encontrado = Encuesta::where('id_ticket', '=', $id)->count();
        $encuesta = Encuesta::where('id_ticket', $id)->first();

        $ticket = Ticket::find($id);
        $ticket->cliente;
        $ticket->responsable;
        return view('cliente.descripcion', compact('ticket', 'encontrado', 'mensajes', 'encuesta'));
    }

    public function verHistorial($id)
    {
        
    }
}
