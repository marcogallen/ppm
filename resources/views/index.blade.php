@extends('app')
@section('content')


        <div class="row">
        	<!--Perros perdidos -->
        	<div class="col-md-4">
        		<h2>Perros en perdidos</h2>
                @foreach($perdidos as $perdido)
        		<div class="portafolio-item">
        			<a href="{{ action('PerrosPerdidosController@detalle',[$perdido->id])}}">
                    <img class="img-responsive" src="/uploads/{{ $perdido->foto }}" alt="">
                </a>
                <h3>
                    <a href="{{ action('PerrosPerdidosController@detalle',[$perdido->id])}}">{{ $perdido->nombre }}</a>
                </h3>
                <p>{{ $perdido->comentarios }}</p>
        		</div>
                @endforeach
        		
        		<a href="/perros-perdidos" class="btn btn-primary">Ver todos</a>
                <a href="/subir-perdido" class="btn btn-danger">Se perdio mi perro</a>
        	</div>
        	<!-- fin perros perdidos -->
        	<!--Perros encontrados -->
        	<div class="col-md-4">
        		<h2>Perros en encontrados</h2>
        		@foreach($encontrados as $encontrado)
                <div class="portafolio-item">
                    <a href="{{ action('PerrosEncontradosController@detalle',[$encontrado->id])}}">
                    <img class="img-responsive" src="/uploads/{{ $encontrado->foto }}" alt="">
                </a>
                <h3>
                    <a href="{{ action('PerrosEncontradosController@detalle',[$encontrado->id])}}">{{ $encontrado->nombre }}</a>
                </h3>
                <p>{{ $encontrado->comentarios }}</p>
                </div>
                @endforeach
                
        		<a href="/perros-encontrados" class="btn btn-primary">Ver todos</a>
                <a href="/subir-encontrado" class="btn btn-danger">Encontre uno</a>
        	</div>
        	<!-- fin perros Encontrados -->
        	<!--Perros en adopcion -->
        	
        	<!--<div class="col-md-4">
        		<h2>Perros en adopción</h2>
        		<div class="portafolio-item">
        			<a href="#">
                    <img class="img-responsive" src="images/pet-laying-down-700x400.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Principe</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        		</div>
        		<div class="portafolio-item">
        			<a href="#">
                    <img class="img-responsive" src="images/trustworthy.png" alt="">
                </a>
                <h3>
                    <a href="#">Super</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        		</div>
        		<a href="/perros-en-adopcion" class="btn btn-primary">Ver todos</a>
                <a href="/subir-en-adopcion" class="btn btn-danger">Tengo uno</a>
        	</div>-->
        	<!-- fin perros en adopcion -->
            </div>
        
@stop