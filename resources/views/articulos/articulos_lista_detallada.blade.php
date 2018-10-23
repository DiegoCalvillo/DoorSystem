@extends('layouts.principal')

@section('content_articulos_detalle')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Lista Detallada de Artículos</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Registros</b>
					</div>
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>Familia</th>
									<th>Dado</th>
									<th>Descripción</th>
									<th>Largo</th>
									<th>BL</th>
									<th>NG</th>
									<th>HU</th>
									<th>B3</th>
									<th>B5</th>
									<th>CH</th>
									<th>BR</th>
								</tr>
							</thead>
							<tbody>
								@foreach($articulos as $articulo)
									<tr>
										<td>{{ $articulo->familia->nombre_familia }} - {{ $articulo->sub_familia->nombre_sub_familia }}</td>
										<td>{{ $articulo->dado }}</td>
										<td>{{ $articulo->descripcion }}</td>
										<td>{{ $articulo->largo }}</td>
										<td>{{ $articulo->BL }}</td>
										<td>{{ $articulo->NG }}</td>
										<td>{{ $articulo->HU }}</td>
										<td>{{ $articulo->B3 }}</td>
										<td>{{ $articulo->B5 }}</td>
										<td>{{ $articulo->CH }}</td>
										<td>{{ $articulo->BR }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop