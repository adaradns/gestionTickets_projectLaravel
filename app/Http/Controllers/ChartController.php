<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Estado_ticket;
use App\Http\Requests;
use JavaScript;

class ChartController extends Controller
{
    public function index()
    {
        $tickets = Ticket::get();
        JavaScript::put([
            'tickets'    =>  $tickets
            ]);
        return view('analista.index-analista');
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
