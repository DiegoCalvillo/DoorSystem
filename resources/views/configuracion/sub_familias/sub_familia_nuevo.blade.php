@extends('layouts.principal')

@section('content_sub_familia_nuevo')
<div id="page-wrapper">
	<div class="container-fluid">
	{!! Form::open(['route' => 'sub_familia/store', 'method' => 'POST']) !!}
	{!! Form::hidden('id', $familia->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Agregar SubFamilia para: {{ $familia->nombre_familia }}</h1>
			</div>
		</div>
		@include('alerts.request')
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Nuevo Registro</b>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									{!! Form::label('full_name', 'SubFamilia') !!}
									{!! Form::text('nombre_sub_familia', null, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-success" type="submit">Registrar</button>
		</div>
	</div>
</div>
@stop