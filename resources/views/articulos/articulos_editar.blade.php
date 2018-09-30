@extends('layouts.principal')

@section('content_articulos_editar')
<div id="page-wrapper">
	{!! Form::open(['route' => 'articulos/update', 'method' => 'PUT']) !!}
	{!! Form::hidden('id', $articulo->id) !!}
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editar: {{ $articulo->descripcion }}</h1>
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
							<div class="col-lg-12">
								<div class="form-group">
									{!! Form::label('full_name', 'Descripción') !!}
									{!! Form::text('descripcion', $articulo->descripcion, ['class' => 'form-control']) !!}			
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Familia') !!}
									{!! Form::select('familia_id', $familias, $articulo->familia_id, ['id' => 'familia_id', 'class' => 'form-control', 'placeholder' => 'Seleccione']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'SubFamlia') !!}
									{!! Form::hidden('selected_sub_familia_id', $articulo->sub_familia_id, ['class' => 'form-control', 'id' => 'hidden_sub_familia_id']) !!}
									{!! Form::select('sub_familia_id', ['placeholder' => 'Seleccione'], null, ['id' => 'sub_familias', 'class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Dado') !!}
									{!! Form::text('dado', $articulo->dado, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Largo') !!}
									{!! Form::text('largo', $articulo->largo, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'BL') !!}
									{!! Form::text('BL', $articulo->BL, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'NG') !!}
									{!! Form::text('NG', $articulo->NG, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'HU') !!}
									{!! Form::text('HU', $articulo->HU, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'B3') !!}
									{!! Form::text('B3', $articulo->B3, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'B5') !!}
									{!! Form::text('B5', $articulo->B5, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'CH') !!}
									{!! Form::text('CH', $articulo->CH, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'BR') !!}
									{!! Form::text('BR', $articulo->BR, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-success" type="submit">Guardar</button>
		</div>
	</div>
</div>
{!! Html::script('js/js_articulos/editar_articulo.js', ['type' => 'text/javascript']) !!}
@stop