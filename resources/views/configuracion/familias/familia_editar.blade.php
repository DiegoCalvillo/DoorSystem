@extends('layouts.principal')

@section('content_familia_editar')
<div id="page-wrapper">
	<div class="container-fluid">
	{!! Form::open(['route' => 'familias/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $familia->id) !!}
		<div class="row">
			<h1 class="page-header">Editar {{ $familia->nombre_familia }}</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Editar Registro</b>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								{!! Form::label('full_name', 'Famlia') !!}
								{!! Form::text('nombre_familia', $familia->nombre_familia, ['class' => 'form-control']) !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="btn btn-success" type="submit">Actualizar</button>
	</div>
</div>
@stop