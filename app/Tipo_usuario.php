<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{	
	protected $table = "tipo_usuario";

     protected $fillable = [
        'id','descripcion',
    ];


    //Un tipo usuario solo pertenece a un usario
    public function user()
    {
    	return $this->belongsTo('App\User');

    }
}
