@extends('layout.app')

@section('title','Flores Creacion')

@section('content')

	@include('common.errors')

	{!! Form::open([ 'route'=> 'flores.store', 'method' => 'POST', 'files' => true ]) !!}
		
		@include('flores.form')

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

	<!-- <form class="form-goup"	method="POST" action="/flores" enctype="multipart/form-data">
		@csrf
		<div class="form-goup">
			<label for="">Nombre</label>
			<input name="nombre" type="text" class="fore-control">
		</div>
	
		<div class="form-goup">
			<label for="">Imagen</label>
			<input name="imagen" type="file">
		</div>
	
		<div class="form-goup">
			<label for="">Descripción</label><br>
			<textarea name="comentarios" id="" cols="50" rows="5" class="rows"></textarea>
		</div>
			
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form> -->
@endsection