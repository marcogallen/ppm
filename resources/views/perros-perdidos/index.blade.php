@extends('app')

@section('content')
 <!--table perros perdidos -->
        <div class="table-responsive">
        	<div class="col-lg-12">
        		<a href="/subir-perdido" class="btn btn-danger">Se perdio mi perro</a>
        	</div>
        	<table class="table table-hover">
        		<thead>
        			<tr>
        				<th>Foto</th>
        				<th>Nombre</th>
        				<th>Fecha</th>
        				<th>Ubicación</th>
        			</tr>
        		</thead>
        		<tbody>
                    @foreach( $perdidos as $perdido)
        			<tr>
        				<td>
        					<a href="{{ action('PerrosPerdidosController@detalle',[$perdido->id])}}">
                    <img class="img-responsive img-table" src="/uploads/{{ $perdido->foto }}" alt="">
                </a>
                	</td>
                	<td class="text-info ">{{ $perdido->nombre }}</td>
                	<td class="text-info ">{{ $perdido->perdido_el->diffForHumans() }}</td>
                	<td class="text-info ">{{ $perdido->colonia }}</td>
        			</tr>
        		@endforeach
        		</tbody>
        	</table>
        </div>
        <!--end table perros perdidos -->
@stop