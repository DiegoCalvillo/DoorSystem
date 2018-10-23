@extends('layouts.principal')

@section('content_articulos_perfil')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Perfil del artículo</h1>
			</div>
		</div>
		@include('alerts.success')
		<div class="row">
			<div class="col-lg-7">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Informacion general</b>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table width="100%">
								<tbody>
									<tr>
										<th>Descripción: </th>
										<td>{{ $articulo->descripcion }}</td>
									</tr>
									<tr>
										<th>Familia: </th>
										<td>{{ $articulo->familia->nombre_familia }}</td>
									</tr>
									<tr>
										<th>SubFamilia: </th>
										<td>{{ $articulo->sub_familia->nombre_sub_familia }}</td>
									</tr>
									<tr>
										<th>Dado: </th>
										<td>{{ $articulo->dado }}</td>
									</tr>
									<tr>
										<th>Largo: </th>
										<td>{{ $articulo->largo }}</td>
									</tr>
									<tr>
										<th>BL: </th>
										<td>$ {{ $articulo->BL }}</td>
									</tr>
									<tr>
										<th>NG: </th>
										<td>$ {{ $articulo->NG }}</td>
									</tr>
									<tr>
										<th>HU: </th>
										<td>$ {{ $articulo->HU }}</td>
									</tr>
									<tr>
										<th>B3: </th>
										<td>$ {{ $articulo->B3 }}</td>
									</tr>
									<tr>
										<th>B5: </th>
										<td>$ {{ $articulo->B5 }}</td>
									</tr>
									<tr>
										<th>CH: </th>
										<td>$ {{ $articulo->CH }}</td>
									</tr>
									<tr>
										<th>BR: </th>
										<td>$ {{ $articulo->BR }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			@include('articulos.shared.articulos_opciones')
			@include('articulos.shared.articulos_modals')
		</div>
	</div>
</div>
@stop