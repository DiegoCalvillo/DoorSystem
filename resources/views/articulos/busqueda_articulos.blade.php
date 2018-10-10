<div class="panel panel-default">
	<div class="panel-heading">
		<b>Búsqueda</b>
	</div>
	<div class="panel-body">
		{!! Form::label('full_name', 'Filtrar por Familia') !!}
		{!! Form::select('familia_id', $familias, null, ['id' => 'familias', 'class' => 'form-control', 'placeholder' => 'Seleccione']) !!}
		<br>
		{!! Form::label('full_name', 'Filtrar por SubFamilia') !!}
		{!! Form::select('sub_familia_id', ['placeholder' => 'Seleccione'], null, ['id' => 'sub_familias', 'class' => 'form-control']) !!}
	</div>
</div>
