@extends('layouts.principal')

@section('content_articulos')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Artículos</h1>
			</div>
		</div>
		@include('alerts.success')
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Registros</b>
					</div>
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>#</th>
									<th>Artículos</th>
								</tr>
							</thead>
							<tbody>
								@foreach($articulos as $articulo)
									<tr>
										<td>{{ $articulo->id }}</td>
										<td>
											<a href="{{ route('articulos/show', ['id' => $articulo->id]) }}">
											{{ $articulo->descripcion }}
											</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						@include('alerts.warning')
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
										<td>{{ $articulos->count() }}</td>
									</tr>
								</tbody>
							</table>
						</div>
						<center><a href="{{ url('articulos/create') }}" type="button" class="btn btn-primary">Crear Nuevo</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop