<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    
    //Referencio la tabla de la BD	
    protected $table = "historial";

    //Los campos que quiero traer
	protected $fillable = [
        'id','id_ticket','id_usuario','motivo', 'fecha',
    ];

    //Relacion One To Many un historial pertenece a un ticket
 	public function ticket(){
    	return $this->belongsTo('App\Ticket');
    }

    //Relacion One To Many
    public function user()
    {
    	return $this->belongsTo('App\Usuario', 'id_usuario');
    }

    //Many To Many
    public function notificacion()
    {
        return $this->belongsToMany('App\Notificacion');
    }
}
