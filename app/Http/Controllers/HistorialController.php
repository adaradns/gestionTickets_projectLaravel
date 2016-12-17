<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Historial;
use App\Http\Requests;
use App\Ticket;

class HistorialController extends Controller
{
    public function index()
    {   
        $historial = Historial::orderBy('id', 'ASC')->paginate(3);
        dd($historial);
        //return view('cliente.historial')->with('historial', $historial);
    }

    public function create()
    {
        return view('cliente.historial');
    }

    public function store(Request $request)
    {
           
    }

    public function show($id)
    {
        $historial = Historial::find($id);
        dd($historial);
        //return view('cliente.historial')->with('historial', $historial);
    }
}
