@extends('layouts.principal')

@section('content_perfiles_perfil')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{ $perfil->nombre_perfil }}</h1>
			</div>
		</div>
		@include('alerts.success')
		<div class="row">
			<div class="col-lg-7">
				<div class="panel panel-default">
				 	<div class="panel-heading">
				 		<b>Información general</b>
				 	</div>
				 	<div class="panel-body">
				 		<div class="table-responsive">
				 			<table width="100%">
				 				<tbody>
				 					<tr>
				 						<th>Fecha de Creación</th>
				 						<td>{{ $perfil->created_at->format('d/m/Y') }}</td>
				 					</tr>
				 					<tr>
				 						<th>Estatus</th>
				 						<td>
											@if($perfil->estatus == true)
												<font color="green"><b>Activado</b></font>
											@else
												<font color="red"><b>Desactivado</b></font>
											@endif
										</td>
				 					</tr>
				 				</tbody>
				 			</table>
				 		</div>
				 	</div>
				</div>
			</div>
			@include('configuracion.perfiles.shared.perfiles_opciones')
		</div>
	</div>
</div>
@stop