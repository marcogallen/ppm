<?php

namespace App\Http\Controllers;


use App\Perdido;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SubirPerroPerdidoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Transport;
//use Illuminate\Mail\Message;
//use App\Http\Controllers\Auth;
use Input;
use Jenssegers\Date\Date;

use Carbon\Carbon;



class PerrosPerdidosController extends Controller
{
    //

    public function __construct(){

        //$this->middleware('auth',['only' => 'yolovi']);
    }

    public function index() {

    	//return \Auth::user();
    	//$perdidos = Perdido::latest('perdido_el')->where('pagado','=',1)->get();
    	$perdidos = Perdido::latest('perdido_el')->pagado()->get();
    	//return $perdidos;
    	return view('perros-perdidos.index',compact('perdidos'));
    }

    public function detalle($id){

    	$perdido = Perdido::findOrFail($id);
    	//dd($perdido->perdido_el->diffForHumans());
        $user = \Auth::user();
    	return view('perros-perdidos.detalle',compact('perdido','user'));
    }

    public function subir() {
        $user = \Auth::user();
    	return view('perros-perdidos.subir',compact('user'));
    }

    public function guardar(SubirPerroPerdidoRequest $request){
    	    	
    	
    	//$file = ['image' => Input::file('fotos')];

    	if(Input::file('fotos')->isValid()){

    		//$perdido = Perdido::create($request->all());
    		$perdido = new Perdido($request->all());
			
			$destinationPath = 'uploads';

			$extension = Input::file('fotos')->getClientOriginalExtension();

			$fileName = rand(11111,99999).'-'.$perdido->id.'.'.$extension;

			Input::file('fotos')->move($destinationPath, $fileName);

			
			$perdido['foto'] = $fileName;
			$perdido->save();
			\Auth::user()->perdidos()->save($perdido);
            \Session::flash("flash_message","Pronto lo encontras, ya esta en nuestra lista");

    	   	return redirect('/perros-perdidos/'.$perdido->id);
    	}

    }

    public function yolovi($id){

        $user = \Auth::user();
        $reportador = Perdido::findOrFail($id)->user;
        if($user->id != $reportador->id)
        {
            \Mail::send('pages.email',['user' => $user,'reportador'=>$reportador],function($message) use ($reportador){
                    $message->to($reportador->email,$reportador->name)->subject('Alguien vio a tu perro');
              });
            return view('perros-perdidos.yolovi',compact('user','reportador'));
        }else {
            return redirect("/");    
        }
        

    }


}
