<div class="col-lg-5">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b>Opciones</b>
		</div>
		<div class="panel-body">
			<a href="{{ route('articulos/edit', ['id' => $articulo->id]) }}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
			<a href="" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</a>
		</div>
	</div>
</div>