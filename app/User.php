<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
    * The database table used by the model.
    *
    *@var string 
    */
    protected $table = 'users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = ['id','id_tipo',
        'nombre', 'apellido', 'nombre_usuario' , 'email', 'habilitado' , 'password', 'fecha_creacion', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = array(
        'password',
        'remember_token'
    );

    //Un usuario solo puede ser de un tipo
    public function tipo_usuario()
    {
        return $this->hasOne('App\Tipo_usuario');
    }

    //Un uusario puede crear muchos tickets
    public function ticket()
    {
        return $this->hasMany('App\Ticket');
    }

    //One To Many
    public function historial()
    {
       return $this->hasMany('App\Historial'); 
    }

    //One To One
    public function mensaje()
    {
        return $this->belongsTo('App\Mensaje');
    }

    //One To Many
    public function notificacion()
    {
        return $this->hasMany('App\Notificaion');
    }

}
