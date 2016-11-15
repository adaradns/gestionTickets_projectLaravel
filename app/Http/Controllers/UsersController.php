<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    public function index()
    {

    	$users = User::orderBy('id', 'ASC')->paginate();
    	return view('admin.index-administrador')->with('users', $users);
    }

    public function create()
    {
        return view('admin.createuser');
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->save();

        Flash::success("Se ha dado de alta al usuario ". $user->nombre . " de forma exitosa.");

        return redirect()->route('admin.users.index');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->email = $request->email;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->nombre_usuario = $request->nombre_usuario;
        $user->id_tipo = $request->tipo_usuario;
        $user->save();

        Flash::warning("El usuario" .$user->nombre. "se ha modificado correctamente");
        return redirect()->route('admin.users.index');
    }
}
