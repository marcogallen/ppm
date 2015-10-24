<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use Carbon\Carbon;

class Encontrado extends Model
{
    //
    protected $fillable = [
    	'colonia',
    	'estado',
    	'codigo_postal',
    	'edad',
    	'raza',
    	'nombre',
    	'tenia_placa',
    	'tenia_collar',
    	'nombre',
    	'comentarios',
    	'encontrado_el',
        'tu_nombre',
        'correo',
        'telefone'
    ];

    protected $dates = ['encontrado_el'];

    public function setEncontradoElAttribute($date){
        Date::setLocale('es');
        //$this->attributes['perdido_el'] = Carbon::createFromFormat('Y-m-d',$date);
        $this->attributes['encontrado_el'] = Date::createFromFormat('Y-m-d',$date);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
