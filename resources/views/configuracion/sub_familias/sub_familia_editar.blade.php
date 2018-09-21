@extends('layouts.principal')

@section('content_sub_familia_editar')
<div id="page-wrapper">
	<div class="container-fluid">
	{!! Form::open(['route' => 'sub_familia/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $sub_familia->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editar {{ $sub_familia->nombre_sub_familia }}</h1>
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
									{!! Form::label('full_name', 'SubFamilia') !!}
									{!! Form::text('nombre_sub_familia', $sub_familia->nombre_sub_familia, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Habilitado') !!}
									{!! Form::select('estatus', array('0' => 'Desactivado', '1' => 'Activado'), $sub_familia->estatus, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-success" type="submit">Actualizar</button>
		</div>
	</div>
</div>
@stop