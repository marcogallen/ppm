<?php

namespace App\Http\Controllers;

use App\Encontrado;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubirPerroEncontradoRequest;
use Input;
use Jenssegers\Date\Date;

use Carbon\Carbon;

class PerrosEncontradosController extends Controller
{
    //

    public function index() {

    	$encontrados = Encontrado::latest('encontrado_el')->get();
    	return view('perros-encontrados.index', compact('encontrados'));
    }

    public function detalle($id){

    	$encontrado = Encontrado::findOrFail($id);
    	//dd($perdido->perdido_el->diffForHumans());
        $user = \Auth::user();
    	return view('perros-encontrados.detalle',compact('encontrado','user'));
    }

    public function subir() {
    	$user = \Auth::user();
    	return view('perros-encontrados.subir',compact('user'));
    }


    public function guardar(SubirPerroEncontradoRequest $request){
    	    	
    	
    	//$file = ['image' => Input::file('fotos')];

    	if(Input::file('fotos')->isValid()){

    		//$perdido = Perdido::create($request->all());
    		$encontrado = new Encontrado($request->all());
			
			$destinationPath = 'uploads';

			$extension = Input::file('fotos')->getClientOriginalExtension();

			$fileName = rand(11111,99999).'-'.$encontrado->id.'.'.$extension;

			Input::file('fotos')->move($destinationPath, $fileName);

			
			$encontrado['foto'] = $fileName;
			$encontrado->save();
			\Auth::user()->encontrados()->save($encontrado);
            \Session::flash("flash_message","Pronto encontraremos a sus dueños, ya esta en nuestra lista");

    	   	return redirect('/perros-encontrados/'.$encontrado->id);
    	}
    }

    public function esmio($id){

        $user = \Auth::user();
        $encontrador = Encontrado::findOrFail($id)->user;
        if($user->id != $reportador->id)
        {
            \Mail::send('pages.email-encontrado',['user' => $user,'encontrador'=>$encontrador],function($message) use ($user){
                    $message->to($user->email,$user->name)->subject('¿Quien tiene a tu perro?');
              });
            return view('perros-encontrados.esmio',compact('user','encontrador'));
        }else {
            return redirect("/");    
        }
        

    }
}
