@extends('app')
@section('content')
<h1>Contacto</h1>
<p>¿Tienes dudas, quieres saber más sobre Perros perdidos México?</p>
{!! Form::open(['url'=>'contacto-exito']) !!}
<div class="form-group ">
	<label>Nombre:</label>
	<input type="text" name="name" id="name" class="form-control" />
</div>

<div class="form-group">
	<label>Email:</label>
	{!! Form::text('email',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	<label>Comentarios</label>
	<textarea class="form-control" rows="3" id="comentarios" name="comentarios"> </textarea>
</div>
<button type="submit" class="btn btn-default">Enviar Comentarios</button>
{!! Form::close() !!}
@stop