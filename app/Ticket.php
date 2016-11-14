<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
    * The database table used by the model.
    *
    *@var string 
    */
    protected $table = 'ticket';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'id', 'id_cliente','id_responsable', 'id_problema', 'id_sla', 'id_estado','descripcion', 'nombre_archivo', 'archivo' , 'fecha_creacion', 'fecha_vencimiento' , 'fecha_cierre',
    ];

    //Un ticket es creado unicamente por un usuario One To Many
    public function user()
    {
    	return $this->belongsTo('App\Usuario');
    }

    //Relacion One To Many un ticket en varios historiales
    public function historial()
    {
    	return $this->hasMany('App\Historial');
    }


    //One To One
    public function estado_ticket()
    {
    	return $this->hasOne('App\Estado_Ticket');
    }

    //One To One
    public function encuesta()
    {
    	return $this->hasOne('App\Encuesta');
    }

    //One To Many
    public function mensaje()
    {
        return $this->hasMany('App\Mensaje');
    }

    //One To One
    public function sla()
    {
        return $this->belongsTo('App\Sla');
    }

    //One To One
    public function tipo_problema()
    {
        return $this->hasOne('App\Tipo_Problema');
    }
}
