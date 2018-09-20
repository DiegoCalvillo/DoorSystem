<div class="col-lg-5">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b>Opciones</b>
		</div>
		<div class="panel-body">
			<a href="" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
			@if (!empty($familia))
				<a href="{{ route('sub_familia/create', ['id' => $familia->id]) }}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Agregar Subfamilia</a>
				<button class="btn btn-danger" data-toggle="modal" data-target="#deleteFamiliaModal"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
			@else
				<button class="btn btn-danger" data-toggle="modal" data-target="#deleteSubFamiliaModal"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
			@endif
		</div>
	</div>
</div>