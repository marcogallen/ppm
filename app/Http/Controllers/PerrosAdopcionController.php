<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PerrosAdopcionController extends Controller
{
    //

    public function index() {
    	return view('perros-adopcion.index');
    }

    public function subir() {
    	return view('perros-adopcion.subir');
    }
}
