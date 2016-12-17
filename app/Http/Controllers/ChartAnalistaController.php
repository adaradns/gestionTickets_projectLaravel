<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ticket;


class ChartAnalistaController extends Controller
{
    public function index()
    {
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
