@extends('layouts.principal')

@section('content_perfiles')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Perfiles</h1>
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
									<th>Perfil</th>
									<th>Estatus</th>
								</tr>
							</thead>
							<tbody>
								@foreach($perfiles as $perfil)
									<tr>
										<td>{{ $perfil->id }}</td>
										<td>
											<a href="{{ route('perfiles/show', ['id' => $perfil->id]) }}">{{ $perfil->name }}</a>
										</td>
										<td>
											@if($perfil->estatus)
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
										<td>{{ $perfiles->count() }}</td>
									</tr>
								</tbody>
							</table>
						</div>
						<center><a href="{{ route('perfiles/create') }}" type="button" class="btn btn-primary">Crear Nuevo</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop