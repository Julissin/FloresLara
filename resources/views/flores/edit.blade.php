@extends('layout.app')

@section('title','Flores Edición')

@section('content')

	@include('common.success')

	{!! Form::model($flor, ['route' => ['flores.update', $flor->slug], 'method' => 'PUT', 'files' => true]) !!}


			@include('flores.form')


		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

	<!-- <form class="form-goup"	method="POST" action="/flores/{{ $flor->slug }}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="form-goup">
			<label for="">Nombre</label>
			<input name="nombre" value="{{ $flor->nombre }}" type="text" class="fore-control">
		</div>
		
		<div class="form-goup">
			<label for="">Imagen</label>
			<input name="imagen" type="file">
		</div>
		
		<div class="form-goup">
			<label for="">Descripción</label><br>
			<textarea name="comentarios" id="" cols="50" rows="5" class="rows"> {{ $flor->comentarios }} </textarea>
		</div>
			
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form> -->
@endsection