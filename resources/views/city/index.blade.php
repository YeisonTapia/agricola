@extends('admin.principal')

<?php $message=Session::get('message') ?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Departamento creado correctamente
</div>
@endif

@section('content')
<h1>listado de ciudades</h1>
<table class="table">
	<thead>
		<th>id</th>
		<th>Ciudad</th>
		<th>Departamento</th>
		<th>opciones</th>
	</thead>
	@foreach($cities as $city)
	<tbody>
		<td>{{ $city->id }}</td>
		<td>{{ $city->namedecity }}</td>
		<td>{{ $city->depart->namedepart}}</td>
		<td></td>
	</tbody>
	@endforeach
</table>
@endsection