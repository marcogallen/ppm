@extends('app')
@section('content')

<!--table perros perdidos -->
        <div class="table-responsive">
            <div class="col-lg-12">
                <a href="/subir-en-adopcion" class="btn btn-danger">Tengo uno</a>
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
        			<tr>
        				<td>
        					<a href="detalle_perro.html">
                    <img class="img-responsive img-table" src="images/funny-dog-videos.jpg" alt="">
                </a>
                	</td>
                	<td class="text-info ">Super</td>
                	<td class="text-info ">01/01/2015</td>
                	<td class="text-info ">Narvarte</td>
        			</tr>
        			<tr>
        				<td>
        					<a href="detalle_perro.html">
                    <img class="img-responsive img-table" src="images/trustworthy.png" alt="">
                </a>
                	</td>
                	<td class="text-info ">Principe</td>
                	<td class="text-info ">01/01/2015</td>
                	<td class="text-info ">Satelite</td>
        			</tr>
        			<tr>
        				<td>
        					<a href="detalle_perro.html">
                    <img class="img-responsive img-table" src="images/pet-laying-down-700x400.jpg" alt="">
                </a>
                	</td>
                	<td class="text-info ">Mara</td>
                	<td class="text-info ">01/01/2015</td>
                	<td class="text-info ">Lomas verdes</td>
        			</tr>
        		</tbody>
        	</table>
        </div>
        <!--end table perros perdidos -->
@stop