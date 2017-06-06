@extends('admin.principal')

<?php $message=Session::get('message') ?>

@if($message == 'store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  Cliente creado correctamente
	</div>
@endif

@section('content')

	<h1 class="text-center">LISTADO DE CLIENTES</h1>
  	<div class="title_right">
    	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
      		<div class="input-group">
        		<input type="text" class="form-control" placeholder="Buscar Clientes">
        		<span class="input-group-btn">
          			<button class="btn btn-default" type="button">Buscar</button>
        		</span>
      		</div>
    	</div>
  	</div>
	<table class="table table-hover table-bordered">
		<thead>
			<th>No DE DOCUMENTO</th>
			<th>NOMBRES</th>
			<th>APELLIDOS</th>
			<th>CORREO ELECTRONICO</th>
			<th>OPCIONES</th>
		</thead>
		@foreach($clients as $client)
		<tbody>
			<td>{{ $client->identification }}</td>
			<td>{{ $client->name }}</td>
			<td>{{ $client->last_name }}</td>
			<td>{{ $client->email }}</td>
			<td>
			{!!link_to_route('client.show', $title = 'Ver', $parameters = $client->id, $attributes = ['class'=>'btn btn-success'])!!}
			{!!link_to_route('client.edit', $title = 'Editar', $parameters = $client->id, $attributes = ['class'=>'btn btn-primary'])!!}
			{!!link_to_route('client.edit', $title = 'Eliminar', $parameters = $client->id, $attributes = ['class'=>'btn btn-danger'])!!}
			</td>
		</tbody>
		@endforeach
	</table>

@endsection