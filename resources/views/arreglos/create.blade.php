@extends('layout.app')

@section('title','Arreglos Creación')

@section('content')

	@include('common.errors')

	{!! Form::open([ 'route'=> 'arreglos.store', 'method' => 'POST', 'files' => true ]) !!}
		
		@include('arreglos.form')

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@endsection