@extends('admin.principal')

<?php $message=Session::get('message') ?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Cuenta de Cobro creada correctamente
</div>
@endif

@section('content')
<h1 class="text-center">CUENTAS DE COBRO</h1>
<table class="table table-hover table-bordered">
	<thead>
		<th>#</th>
		<th>FECHA</th>
		<th>NOMBRE DEL CLIENTE</th>
		<th>DOCUMENTO DEL CLIENTE</th>
		<th>VALOR DE LA CUENTA DE COBRO</th>
		<th>ESTADO</th>
		<th>OPCIONES</th>
		<hr>
	</thead>
	@foreach($accounts as $account)
	<tbody>
		<td>{{ $account->id }}</td>
		<td>{{ $account->date }}</td>
		<td>{{ $account->client->name}} {{ $account->client->last_name}}</td>
		<td>{{ $account->client->identification}}</td>
		<td>{{ $account->price }}</td>
		<td></td>
		<td>

			{!!link_to_route('account.show', $title = 'PDF', $parameters = $account->id, $attributes = ['class'=>'btn btn-success'])!!}
			{!!link_to_route('account.edit', $title = 'Editar', $parameters = $account->id, $attributes = ['class'=>'btn btn-primary'])!!}
			{!!link_to_route('account.edit', $title = 'Eliminar', $parameters = $account->id, $attributes = ['class'=>'btn btn-danger'])!!}

		</td>
	</tbody>
	@endforeach
</table>
@endsection