@extends('layout.app')

@section('title','Flores')

@section('content')

<div class="row">
@foreach($flores as $flores)	
	<div class="col-sm">
		<div class="card text-center" style="width: 18rem; margin-top:70px;">
			<img style="height:100px; width:100px; background-color:#EFEFEF; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/imgenes/{{ $flores->imagen }}" alt="">
			  <div class="card-body">
			    <h5 class="card-title">{{ $flores->nombre}}</h5>
			    <p class="card-text">{{ $flores->comentarios }}</p>
			    <a href="/flores/{{ $flores->slug }}" class="btn btn-primary">Ver más...</a>
			  </div>
		</div>
	</div>
@endforeach	
</div>


@endsection