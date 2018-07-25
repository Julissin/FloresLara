	<div class="form-group">
		{!! Form::label('nombre', 'Nombre') !!}

		{!! Form::text('nombre', null, ['class' => 'form-control'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('imagen', 'Imagen') !!}

		{!! Form::file('imagen') !!}
	</div>

	<div class="form-group">
		{!! Form::label('comentarios', 'Descripción') !!} <br>

		{!! Form::textarea('comentarios', null, ['class' => 'form-control'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('slug', 'Slug') !!}

		{!! Form::text('slug', null, ['class' => 'form-control'] ) !!}
	</div>