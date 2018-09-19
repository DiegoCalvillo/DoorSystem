@extends('layouts.principal')

@section('content_sub_familia_perfil')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Perfil de la Subfamilia</h1> 
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Información general</b>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table width="100%">
								<tbody>
									<tr>
										<th>Subfamilia: </th>
										<td>{{ $sub_familia->nombre_sub_familia }}</td>
									</tr>
									<tr>
										<th>Familia: </th>
										<td>{{ $sub_familia->familia->nombre_familia }}</td>
									</tr>
									<tr>
										<th>Fecha de creación: </th>
										<td>{{ $sub_familia->created_at }}</td>
									</tr>
									<tr>
										<th>Ultima actualización: </th>
										<td>{{ $sub_familia->updated_at }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Opciones</b>
					</div>
					<div class="panel-body">
						<a href="" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
						<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
						@include('sub_familias.sub_familia_modals')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop