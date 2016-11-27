<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ticket;


class ChartAnalistaController extends Controller
{
    public function index()
    {   
    	/*$graficoEstados = Ticket::
    		select('descripcion')
    			->from('estado_ticket')
    			->where('estado_ticket.id = ticket.id_estado');
    	dd($graficoEstados);
    	return view('analista.index-analista')->with('graficoEstados', $graficoEstados);;*/
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        
    }

     public function show($id)
    {
       
    }
}
