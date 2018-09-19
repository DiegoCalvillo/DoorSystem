@extends('layouts.principal')

@section('content_familia_perfil')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Perfil de la familia</h1>
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
										<th>Familia: </th>
										<td>{{ $familia->nombre_familia }}</td>
									</tr>
									<tr>
										<th>Fecha de creación: </th>
										<td>{{ $familia->created_at }}</td>
									</tr>
									<tr>
										<th>Ultima actualización: </th>
										<td>{{ $familia->updated_at }}</td>
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
						<b>Opciones</b>
					</div>
					<div class="panel-body">
						<a href="" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
						<a href="{{ route('sub_familia/create', ['id' => $familia->id]) }}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Agregar Subfamilia</a>
						<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
					</div>
				</div>
			</div>
		</div>
		@include('familias.familia_modals')
		@if($sub_familias->count() > 0)
			<div class="row">
				<div class="col-lg-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<b>SubFamilias</b>
						</div>
						<div class="panel-body">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>#</th>
										<th>SubFamilia</th>
									</tr>
								</thead>
								<tbody>
									@foreach($sub_familias as $sub_familias)
										<tr>
											<td>{{ $sub_familias->id }}</td>
											<td>
												<a href="{{ route('sub_familia/show', ['id' => $sub_familias->id]) }}">{{ $sub_familias->nombre_sub_familia }}</a>
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
							<b>Información de las SubFamilias</b>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th>Registros</th>
											<td>{{ $sub_familias->count() }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endif
	</div>
</div>
@stop