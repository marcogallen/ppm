@extends('app')
@section('content')
 <!--table perros perdidos -->
        <div class="table-responsive">
            <div class="col-lg-12">
                <a href="/subir-encontrado" class="btn btn-danger">Encontre uno</a>
            </div>
        	<table class="table table-hover">
        		<thead>
        			<tr>
        				<th>Foto</th>
        				
        				<th>Fecha</th>
        				<th>Ubicación</th>
        			</tr>
        		</thead>
        		<tbody>
        			@foreach( $encontrados as $encontrado)
                    <tr>
                        <td>
                            <a href="{{ action('PerrosEncontradosController@detalle',[$encontrado->id])}}">
                    <img class="img-responsive img-table" src="/uploads/{{ $encontrado->foto }}" alt="">
                </a>
                    </td>
                    <td class="text-info ">{{ $encontrado->nombre }}</td>
                    <td class="text-info ">{{ $encontrado->encontrado_el->diffForHumans() }}</td>
                    <td class="text-info ">{{ $encontrado->colonia }}</td>
                    </tr>
                @endforeach
        		</tbody>
        	</table>
        </div>
        <!--end table perros perdidos -->
@stop