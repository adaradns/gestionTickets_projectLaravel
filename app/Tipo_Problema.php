<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Problema extends Model
{	
	protected $table = "tipo_problema";

    protected $fillable = [
        'id','descripcion',
    ];

    //One To One
    public function ticket()
    {
    	return $this->belongsTo('App\Ticket');
    }
}
