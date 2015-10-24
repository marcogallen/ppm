@extends('app')

@section('content')
<div class ="row">
        	<div class="col-md-8">
        		<img class="img-responsive" src="/uploads/{{ $perdido->foto }}" alt="">
        	</div>
        	<div class="col-md-4">
        		<h3>{{ $perdido->nombre }}</h3>
        		<p>{{ $perdido->comentarios }}</p>
        		<h3>Detalles:</h3>
        		<ul>
        			<li>Nombre: {{ $perdido->nombre }}</li>
        			<li>Raza: {{ $perdido->raza }}</li>
        			<li>Se perdio por: {{ $perdido->colonia }}</li>
                                <li>Se perdio: {{ $perdido->perdido_el->diffForHumans() }}</li>
        		</ul>
                        @if($user)
                                @if($perdido->user_id != $user->id)
                		<p>
                                        
                                        
                			<a href="/yolovi-perdido/{{$perdido->id}}" class="btn btn-xl">Yo lo vi</a>

                                        
                                </p>
                                <p>
                                        <small>Al dar clic en el botón se le enviara un correo al que reporto a {{$perdido->nombre}} con tu información de contacto (Nombre y teléfono).</small>
                		</p>
                                @endif
                                
                        @else
                                <p>
                                        <a href="/yolovi-perdido/{{$perdido->id}}" class="btn btn-xl">Yo lo vi</a>
                                </p>
                        @endif

                        <div class="fb-share-button" 
                        data-href="{{ action('PerrosPerdidosController@detalle',[$perdido->id])}}" 
                        data-layout="button"></div>
        	</div>
        </div>

@stop