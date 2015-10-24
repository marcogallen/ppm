<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Perdido;
use App\Encontrado;
use Carbon\Carbon;

class MainPageController extends Controller
{
    //index
    public function index(){

    	$perdidos = Perdido::latest('perdido_el')->take(3)->get();
    	$encontrados = Encontrado::latest('encontrado_el')->take(3)->get();
    	return view('index',compact('perdidos','encontrados'));
    }
}
