<div class="modal fade" id="deleteUsuarioModal" tabindex="-1" role="dialog" aria-labelledb="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Alerta de Eliminación</h4>
			</div>
			<div class="modal-body">
				<b>¿Está seguro que desea borrar este registro?</b>
			</div>
			<div class="modal-footer">
				<a href="{{ route('usuarios/destroy', ['id' => $usuario->id]) }}" type="button" class="btn btn-primary">Aceptar</a>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>