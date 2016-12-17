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
        'id', 'id_cliente','id_responsable', 'id_problema', 'id_sla', 'id_estado','titulo','descripcion', 'nombre_archivo', 'archivo' , 'fecha_creacion', 'fecha_vencimiento' , 'fecha_cierre',
    ];

    //Un ticket es creado unicamente por un usuario One To Many
    public function cliente()
    {
    	return $this->belongsTo('App\User', 'id_cliente');
    }

    public function responsable()
    {
        return $this->belongsTo('App\User', 'id_responsable');
    }

    //Relacion One To Many un ticket en varios historiales
    public function historial()
    {
    	return $this->belongsTo('App\Historial', 'id_ticket');
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
        return $this->belongsTo('App\Sla', 'id_sla');
    }

    public function tipo_problema()
    {
        return $this->hasOne('App\Tipo_Problema');
    }
}
