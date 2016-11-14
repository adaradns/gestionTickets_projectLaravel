<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{	

	protected $table = "encuesta";

    protected $fillable = [
        'id', 'id_ticket', 'pregunta_1','pregunta_2','pregunta_3',
    ];


    //Relacion One To One
    public function ticket()
    {
    	return $this->belongsTo('App\Ticket');
    }
}
