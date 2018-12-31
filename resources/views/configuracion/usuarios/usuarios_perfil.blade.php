@extends('layouts.principal')

@section('content_usuarios_perfil')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Perfil: {{ $persona->apellidos }}, {{ $persona->nombre }}</h1>
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
										<th>Nombre de Usuario</th>
										<td>{{ $usuario->name }}</td>
									</tr>
									<tr>
										<th>Correo electrónico</th>
										<td>{{ $usuario->email }}</td>
									</tr>
									<tr>
										<th>Perfil</th>
										<td>{{ $usuario->perfil->nombre_perfil }}</td>
									</tr>
									<tr>
										<th>Estatus</th>
										<td>
											@if($usuario->estatus == true)
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
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Información de Usuario</b>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table width="100%">
								<tbody>
									<tr>
										<th>Contraseña cambiada</th>
											<td>
												@if($usuario->change_password == true)
													<b>Si</b>
												@else
													<b>No</b>
												@endif
											</td>
										</tr>
									<tr>
										<th>Sesiones Iniciadas</th>
										<td>{{ $usuario->session_logins_count }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Foto de Perfil</b>
					</div>
					<div class="panel-body">
						<img class="rounded-circle img-fluid d-block mx-auto" width="40%" src="{!! asset($persona->ruta_foto_perfil) !!}">
					</div>
				</div>
				@if($usuario->id != Auth::User()->id)
					@include('configuracion.usuarios.shared.usuarios_opciones')
					@include('configuracion.usuarios.usuarios_modals')
				@endif
			</div>
		</div>
	</div>
</div>
@stop