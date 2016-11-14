<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sla extends Model
{
	protected $table = "sla";

    protected $fillable = [
        'id','criticidad','dias',
    ];


    //One To One
    public function ticket()
    {
    	return $this->hasOne('App\Ticket');
    }
}
