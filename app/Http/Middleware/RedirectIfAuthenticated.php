<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch ($this->auth->user()->id_tipo) {
            case '1':
                #Administrador
                return redirect()->to('admin');
                break;

            case '2':
                #Cliente
                return redirect()->to('cliente');
                break;

            case '3':
                #Empleado
                return redirect()->to('empleado');
                break;

            case '4':
                #Analista
                return redirect()->to('analista');
                break;

            default:
                return redirect()->to('login');
                break;
            
            }
            
            return redirect('/admin');
        }

        return $next($request);
    }
}
