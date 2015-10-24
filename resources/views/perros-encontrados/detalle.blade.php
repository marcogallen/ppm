@extends('app')

@section('content')
<div class ="row">
        	<div class="col-md-8">
        		<img class="img-responsive" src="/uploads/{{ $encontrado->foto }}" alt="">
        	</div>
        	<div class="col-md-4">
        		<h3>{{ $encontrado->nombre }}</h3>
        		<p>{{ $encontrado->comentarios }}</p>
        		<h3>Detalles:</h3>
        		<ul>
        			<li>Nombre: {{ $encontrado->nombre }}</li>
        			<li>Raza: {{ $encontrado->raza }}</li>
        			<li>Se perdio por: {{ $encontrado->colonia }}</li>
                                <li>Se perdio: {{ $encontrado->encontrado_el->diffForHumans() }}</li>
        		</ul>
                        @if($user)
                                @if($encontrado->user_id != $user->id)
                		<p>
                                        
                                        
                			<a href="/esmio-encontrado/{{$encontrado->id}}" class="btn btn-xl">¡Es mio!</a>

                                        
                                </p>
                                <p>
                                        <small>Al dar clic en el botón se le enviara un correo al que reporto a {{$encontrado->nombre}} con tu información de contacto (Nombre y teléfono).</small>
                		</p>
                                @endif
                                
                        @else
                                <p>
                                        <a href="/esmio-encontrado/{{$encontrado->id}}" class="btn btn-xl">¡Es mio!</a>
                                </p>
                        @endif

                        <div class="fb-share-button" 
                        data-href="{{ action('PerrosEncontradosController@detalle',[$encontrado->id])}}" 
                        data-layout="button"></div>
        	</div>
        </div>

@stop