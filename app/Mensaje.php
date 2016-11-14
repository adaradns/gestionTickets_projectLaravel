<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{	
	protected $table = "mensaje";

    protected $fillable = [
        'id','id_ticket','id_usuario','fecha_creacion', 'descripcion',
    ];

    //One To Many 
    public function ticket()
    {
    	return $this->belongsTo('App\Ticket');
    }

    //One To One
    public function user()
    {
    	return $this->hasOne('App\Usuario');
    }
}
