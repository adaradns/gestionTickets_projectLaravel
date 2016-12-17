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
        $sla = Sla::orderBy('id', 'ASC')->paginate(3);
        return view('admin.sla')->with('sla', $sla);
    	
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
        return redirect()->route('admin.sla.store');

    }

    public function edit($id)
    {
        $sla = Sla::find($id);
        return view('admin.slaEdit')->with('sla', $sla);
    }

    public function update(Request $request, $id)
    {
        $sla = Sla::find($id);
        $sla->dias = $request->dias;
        $sla->save();

        Flash::warning("Los dias de SLA se han modificado correctamente");
        return redirect()->route('admin.sla.index');
    }

    public function show($id)
    {
       $sla = Sla::find($id);
       return view('admin.sla')->with('sla', $sla);
    }
}
