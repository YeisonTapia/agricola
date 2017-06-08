@extends('admin.principal')

<?php $message=Session::get('message') ?>

@if($message == 'store')
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      No es posible eliminar a este usuario, tiene cuentas de cobro asociadas, si esta seguro de eliminarlo debe eliminar primero sus cuentas de cobro.
    </div>
@endif

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-md-10 col-md-offset-2">
    			 <h1> {{ $client->name }} {{ $client->last_name }}</h1>
    		</div>
    		<div class="col-md-6 col-md-offset-2">
    			<h5><strong>No. de Documento : </strong>{{ $client->identification }}</h5>
    			<h5><strong>Email : </strong>{{ $client->email }}</h5>
    			<h5><strong>Departamento : </strong> {{$client->depart->namedepart}}</h5>
    			<h5><strong>Ciudad : </strong>{{$client->city->namedecity}}</h5>
    			<h5><strong>Direccion : </strong>{{ $client->address }}</h5>
    			<h5><strong>Telefono : </strong>{{ $client->phone }}</h5>
    		</div>   
    	</div>
        <br>
        <hr>
        <br>
        <h3>CUENTAS DE COBRO DE ESTE CLIENTE</h3>
            <table class="table table-hover table-bordered">
                <thead>
                    <th>#</th>
                    <th>FECHA</th>
                    <th>Valor</th>
                    <th>Opciones</th>
                </thead>
                    @foreach($accounts as $account)
    <tbody>
        <td>{{ $account->id }}</td>
        <td>{{ $account->date }}</td>
        <td>{{ $account->price }}</td>
        <td>
            {!!link_to_route('account.show', $title = 'PDF', $parameters = $account->id, $attributes = ['class'=>'btn btn-success'])!!}
            {!!link_to_route('account.edit', $title = 'Editar', $parameters = $account->id, $attributes = ['class'=>'btn btn-primary'])!!}
            

        </td>
    </tbody>
    @endforeach

        </table>
    </div>
@endsection