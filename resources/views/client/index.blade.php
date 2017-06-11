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
  	<div class="title_right ">
    	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search ">
      		<div class="input-group">
	      		{!!Form::open(['route'=>'client.index','method'=>'GET','class'=>'navbar-form navbar-left', 'role'=>'search'])!!}
	      			{!! Form::text ('name', null , ['class'=>'form-control', 'placeholder'=>'Nombre de cliente']) !!}
	        		<span class="input-group-btn">
	          			<button class="btn btn-default" type="submit">Buscar</button>
	        		</span>
	        	{!!Form::close()!!}
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
			</td>
		</tbody>
		@endforeach
	</table>
	{!! $clients->render() !!}


@endsection