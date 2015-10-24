<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SatellitePagesController extends Controller
{
    //

    public function nosotros(){
    	return view('pages.nosotros');
    }

    public function servicios(){
    	return view('pages.servicios');
    }

    public function contacto(){
    	return view('pages.contacto');
    }
}
