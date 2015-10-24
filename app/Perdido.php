<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use Carbon\Carbon;

class Perdido extends Model
{
    protected $fillable = [
    	'colonia',
    	'estado',
    	'codigo_postal',
    	'edad',
    	'raza',
    	'nombre',
    	'tenia_placa',
    	'tenia_collar',    	
    	'comentarios',
    	'perdido_el',
        'user_id' //TEMP DELETE
    ];

    protected $dates = ['perdido_el'];

    //scopeNombre(query)
    public function scopePagado($query){

        //$query->where('pagado', '=', 1);

    }

    //setNameAttribute(valor)
    public function setPerdidoElAttribute($date){
        Date::setLocale('es');
        //$this->attributes['perdido_el'] = Carbon::createFromFormat('Y-m-d',$date);
        $this->attributes['perdido_el'] = Date::createFromFormat('Y-m-d',$date);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
