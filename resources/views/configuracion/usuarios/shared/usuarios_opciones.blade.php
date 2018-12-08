<div class="panel panel-default">
	<div class="panel-heading">
		<b>Opciones</b>
	</div>
	<div class="panel-body">
		<a href="{{ route('usuarios/edit', ['id' => $usuario->id]) }}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
		<button class="btn btn-danger" data-toggle="modal" data-target="#deleteUsuarioModal"><i class="glyphicon glyphicon-remove-sign"> Eliminar</i></button>
	</div>
</div>