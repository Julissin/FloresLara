@extends('layout.app')

@section('title','Arreglos')

@section('content')

<div class="row">
@foreach($arreglos as $arreglos)	
	<div class="col-sm">
		<div class="card text-center" style="width: 18rem; margin-top:70px;">
			<img style="height:100px; width:100px; background-color:#EFEFEF; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/imgenes/{{ $arreglos->imagen }}" alt="">
			  <div class="card-body">
			    <h5 class="card-title">{{ $arreglos->nombre}}</h5>
			    <p class="card-text">{{ $arreglos->descripcion }}</p>
			    <a href="/arreglos/{{ $arreglos->slug }}" class="btn btn-primary">Ver más...</a>
			  </div>
		</div>
	</div>
@endforeach	
</div>


@endsection