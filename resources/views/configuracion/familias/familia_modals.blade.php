<div class="modal fade" id="deleteFamiliaModal" tabindex="-1" role="dialog" aria-labelledb="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Alerta de Eliminación</h4>
			</div>
			<div class="modal-body">
				@if($familia->sub_familias->count() > 0)
					<b>El registro cuenta con {{ $familia->sub_familias->count() }} subregistros asociados, si lo borra tambien se borrarán dichos registros. ¿Está seguro que desea borrar este registro?</b>
				@else
					<b>¿Está seguro que desea borrar este registro?</b>
				@endif
			</div>
			<div class="modal-footer">
				<a href="{{ route('familias/destroy', ['id' => $familia->id]) }}" type="button" class="btn btn-primary">Aceptar</a>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>