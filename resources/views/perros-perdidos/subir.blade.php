@extends('app')

@section('content')
<h1>Subir perro perdido</h1>

<div class="row">
        	<div class="col-lg-6">
        		{!! Form::open(['url'=>'subir-perdido','files' => true]) !!}
                        
        			<h5>Los campos marcados con <span class="fld_req">*</span> son requeridos.</h5>
        			<h3>¿Dónde se perdio?</h3>
        			<div class="form-group ">
        				{!! Form::label('txt_colonia','Colonia:') !!}
        				<span class="fld_req">*</span>
        				{!! Form::text('colonia',null,['class' => 'form-control']) !!}
        				<!--<input type="text" class="form-control" id="txt_colonia" name="txt_colonia"  />-->
        				<div class="help-block with-errors"></div>
        			</div>
        			<div class="form-group" id="st_selector">
        				<label>Estado:<span class="fld_req">*</span></label>
        				<input type="text" class="form-control" id="estado" name="estado" placeholder="Escribe tu estado" />
        				<div class="help-block with-errors"></div>
        			</div>
        			<div class="form-group">
        				<label>Código postal:<span class="fld_req">*</span></label>
        				<input type="text" class="form-control" id="codigo_postal" name="codigo_postal"  />
        				<div class="help-block with-errors"></div>
        			</div>
        			<h3>Cuentanos de el</h3>
        			<div class="form-group">
        				<label>Nombre:<span class="fld_req">*</span></label>
        				<input type="text" class="form-control" id="nombre" name="nombre"  />
        				<div class="help-block with-errors"></div>
        			</div>
        			<div class="form-group">
        				<label>Raza:<span class="fld_req">*</span></label>
        				<input type="text" class="form-control" id="raza" name="raza"  />
        				<div class="help-block with-errors"></div>
        			</div>
        			<div class="form-group">
        				<label>Edad:<span class="fld_req">*</span></label>
        				<input type="text" class="form-control" id="edad" name="edad"  />
        				<div class="help-block with-errors"></div>
        			</div>
                                <div class="form-group">
                                {!! Form::label('perdido_el', 'Se perdio el:') !!}
                                {!! Form::input('date','perdido_el',date('Y-m-d'),['class'=>'form-control']) !!}
        			</div>
                                <div class="form-group">
                                        
                                        <label class="checkbox-inline">
                                        <input type="checkbox" checked name="tenia_collar" value="1" data-on-text="Si" data-off-text="No">¿Tenia collar?                                     
                                        </label>                                
                                </div>
                                <div class="form-group">
                                        
                                        <label class="checkbox-inline">
                                        <input type="checkbox" checked name="tenia_placa" value="1" data-on-text="Si" data-off-text="No">
                                        ¿Tenia placa?                                     
                                        </label>                                
                                </div>
                                <div class="form-group">
                                        <!--<label>Fotos: (máximo 3)<span class="fld_req">*</span></label>
                                        <input type="file" class="form-control" id="fld_fotos" name="fld_fotos"  />
                                        <div class="help-block with-errors"></div>-->
                                        {!! Form::label('fotos', 'Fotos:') !!}
                                        <span class="fld_req">*</span>
                                        {!! Form::file('fotos') !!}
                                </div>
                                <div class="form-group">
                                        <label>Comentarios:</label>
                                        <textarea class="form-control" rows="3" id="comentarios" name="comentarios"> </textarea>
                                </div>
                                <h3>Cuentanos de ti</h3>
                                <div class="form-group">
                                        <label>Tu nombre:<span class="fld_req">*</span></label>
                                        <input type="text" class="form-control" id="" name="user_nombre" value="{{ $user->name}}"  />
                                        <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                        <label>Correo:<span class="fld_req">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email}}" />
                                        <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                        <label>Teléfono:<span class="fld_req">*</span></label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $user->telefone}}"  />
                                        <div class="help-block with-errors"></div>
                                </div>
                                <button type="submit" class="btn btn-default">Enviar</button>
                                <a href="/perros-perdidos">Cancelar</a>
                        
        		{!! Form::close() !!}
                        @if($errors->any())
                                <ul class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                </ul>
                        @endif
        		<p>Al dar clic en Enviar estaras aceptando nuestros <a href="#">Términos y condiciones</a>
        	</div>
        </div>
@stop