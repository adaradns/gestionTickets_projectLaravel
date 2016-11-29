<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sla;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Requests\SlaRequest;


class SlaController extends Controller
{
    public function index()
    {   
    	 return view('admin.sla');
    }

    public function create()
    {
        return view('admin.sla');
    }

    public function store(SlaRequest $request)
    {
        $sla = new Sla($request->all());
        $sla->save();
        Flash::success("Se han creado los dias de SLA de forma exitosa.");
        return redirect()->route('admin.users.index');

    }

     public function show($id)
    {
       
    }
}
