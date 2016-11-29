<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Laracasts\Flash\Flash;
use Mail;
use App\Http\Requests\UserRequest;

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

    public function store(UserRequest $request)
    {   
        $user = new User($request->all());
        $user->save();

        Flash::success("Se ha dado de alta al usuario ". $user->nombre . " de forma exitosa.");

       /* Mail::send('emails.message',$request->all(), function($message) use ($user){
            $message->from(env('CONTACT_MAIL'), env('CONTACT_NAME'));
            $message->subject("Holaa");
            $message->to('adardenis@hotmail.com', 'Adara');
        });

        return dd('Exito!');
        */
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
        $user->id_tipo = $request->id_tipo;
        $user->save();

        Flash::warning("El usuario " .$user->nombre. " se ha modificado correctamente");
        return redirect()->route('admin.users.index');
    }

   /* public function sendEmailReminder()
    {
        /*
        //CON PHPMailer
        $mail = new \PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->CharSet = "utf-8"; 
            $mail->SMTPAuth = true;  
            $mail->SMTPSecure = "tls"; 
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 2525; 
            $mail->Username = "nonasoft.dev@gmail.com";
            $mail->Password = "nonasoftdev";
            $mail->setFrom("adaradenis@gmail.com", "Adara");
            $mail->Subject = "Probando";
            $mail->MsgHTML("Hola mundo. Esta es la primer línea");
            $mail->addAddress("adaradenis@gmail.com", "Aasdasd"); //A donde se envia el email
            $mail->send();
        } catch (phpmailerException $e) {
            dd($e);
        } catch (Exception $e) {
            dd($e);
        }
        die('success');*/


        //$this->
     /*   $user = User::findOrFail($id);

      Mail::send('emails.reminder', ['user' => $this], function ($m) use ($user) {
            $m->from('adaradenis@app.com', 'Your Application');

            $m->to($this->email, $this->nombre)->subject('Your Reminder!');
        });
        return redirect()->route('admin.users.index');
    }*/
}
