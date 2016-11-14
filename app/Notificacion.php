<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificacion';

    protected $fillable = ['id_usuario_destinatario','id_historial', 'leido',
    ];


    //One To Many
    public function user()
    {
    	return $this->belongsTo('App\Usuario');
    }

    //Many To Many
    public function historial
    {
    	return $this->belongsToMany('App\Historial');
    }
}
