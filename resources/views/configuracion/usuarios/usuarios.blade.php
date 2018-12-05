@extends('layouts.principal')

@section('content_usuarios')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Usuarios</h1>
			</div>
		</div>
		@include('alerts.success')
		@include('alerts.errors')
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Registros</b>
					</div>
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Usuario</th>
									<th>Estatus</th>
								</tr>
							</thead>
							<tbody>
								@foreach($usuarios as $usuario)
									<tr>
										<td>{{ $usuario->id }}</td>
										<td>
											<a href="{{ route('usuarios/show', ['id' => $usuario->id]) }}">{{ $usuario->name }}</a>
										</td>
										<td>
											@if($usuario->estatus)
												<font color="green"><b>Activado</b></font>
											@else
												<font color="red"><b>Desactivado</b></font>
											@endif
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Información</b>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<th>Registros</th>
										<td>{{ $usuarios->count() }}</td>
									</tr>
								</tbody>
							</table>
						</div>
						<center><a href="{{ url('usuarios/create') }}" type="button" class="btn btn-primary">Crear Nuevo</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop