<div class="panel panel-default">
	<div class="panel-heading">
		<b>Búsqueda</b>
	</div>
	<div class="panel-body">
		{!! Form::label('full_name', 'Filtrar por familia') !!}
		{!! Form::select('familia_id', $familias, null, ['id' => 'familias', 'class' => 'form-control', 'placeholder' => 'Seleccione']) !!}
	</div>
</div>
