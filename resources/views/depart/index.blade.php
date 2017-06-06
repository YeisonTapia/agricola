@extends('admin.principal')

<?php $message=Session::get('message') ?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Departamento creado correctamente
</div>
@endif

@section('content')
<h1>listado de departamentos</h1>
<table class="table">
	<thead>
		<th>id</th>
		<th>nombre</th>
		<th>opciones</th>
	</thead>
	@foreach($departs as $depart)
	<tbody>
		<td>{{ $depart->id }}</td>
		<td>{{ $depart->namedepart }}</td>
		<td>
		{!!link_to_route('depart.edit', $title = 'Editar', $parameters = $depart->id, $attributes = ['class'=>'btn btn-primary'])!!}
		{!!link_to_route('depart.edit', $title = 'Eliminar', $parameters = $depart->id, $attributes = ['class'=>'btn btn-danger'])!!}
		</td>
	</tbody>
	@endforeach
</table>
@endsection