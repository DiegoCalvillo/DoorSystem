<div class="col-lg-5">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b>Opciones</b>
		</div>
		<div class="panel-body">
			@if (!empty($familia))
				<a href="{{ route('familias/edit', ['id' => $familia->id]) }}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
				<a href="{{ route('sub_familia/create', ['id' => $familia->id]) }}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Agregar Subfamilia</a>
				<button class="btn btn-danger" data-toggle="modal" data-target="#deleteFamiliaModal"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
			@else
				<a href="{{ route('sub_familia/edit', ['id' => $sub_familia->id]) }}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
				<button class="btn btn-danger" data-toggle="modal" data-target="#deleteSubFamiliaModal"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
			@endif
		</div>
	</div>
</div>