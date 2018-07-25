@extends('layout.app')

@section('title','Flor')

@section('content')

	@include('common.success')

	<img style="height:200px; width:200px; background-color:#EFEFEF; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/imgenes/{{ $flor->imagen }}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{ $flor->nombre}}</h5>
		<p class="card-text">{{ $flor->comentarios }}</p>
		<br>
		<table class="table table-borderless">
		  <thead>
		    <tr>
		      <th scope="col"><a href="/flores/{{ $flor->slug }}/edit" class="btn btn-primary">Editar</a></th>
		      <th scope="col">
				{!! Form::open([ 'route' => ['flores.destroy', $flor->slug ], 'method' => 'DELETE']) !!}
					{!! Form:: submit('Eliminar', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}
		      </th>
		    </tr>
		  </thead>
		</table>
	</div>

@endsection