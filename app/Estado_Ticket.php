<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_Ticket extends Model
{	

	protected $table = "estado_ticket";

    protected $fillable = [
        'id', 'descripcion',
    ];

    //One To One
    public function ticket()
    {
    	return $this->belongsTo('App\Ticket');
    }
}
