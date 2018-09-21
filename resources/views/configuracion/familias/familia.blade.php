@extends('layouts.principal')

@section('content_familias')
<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Familias</h1>
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
										<th>Famlia</th>
										<th>Estatus</th>
									</tr>
								</thead>
								<tbody>
									@foreach($familias as $familia)
										<tr>
											<td>{{ $familia->id }}</td>
											<td>
												<a href="{{ route('familias/show', ['id' => $familia->id]) }}">{{ $familia->nombre_familia }}</a>
											</td>
											<td>
												@if ($familia->estatus)
													<font color="green"><b>Activado</b></font>
												@else
													<font color="red"><b>Desactivado</b></font>
												@endif
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							{{ $familias->links() }}
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
											<td>{{ $familias->count() }}</td>
										</tr>
									</tbody>
								</table>
							</div>
							<center><a href="{{ url('familias/create') }}" type="button" class="btn btn-primary">Crear Nuevo</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop