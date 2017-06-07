@extends('admin.principal')
@section('content')
  <h1 class="text-center">EDITAR CUENTA DE COBRO No. {{ $account->id }}</h1><br>
  {!!Form::model($account,['route'=> ['account.update',$account->id],'method'=>'PUT','class'=>'form-horizontal form-label-left'])!!}
    <div class="form-group">
      <div class="col-md-2 col-xs-12 col-md-offset-3">{!!Form::label('Fecha')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::date('date', \Carbon\Carbon::now(),['class'=>'form-control'])!!}</div> 
    </div>
    <div class="form-group">
      <div class="col-md-2 col-xs-12 col-md-offset-3">{!!Form::label('Cliente')!!}</div>
      <div class="col-md-5 col-xs-12"> 
      	<div class="col-md-8 col-xs-12">{{ $account->client->name }} {{ $account->client->last_name }}</div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-2 col-xs-12 col-md-offset-3">{!!Form::label('Detalle')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::textarea('details',null,['class'=>'form-control','placeholder'=>'Ingresa aqui el detalle del trabajo realizado'])!!}</div>
    </div>
    <div class="form-group">
      <div class="col-md-2 col-xs-12 col-md-offset-3">{!!Form::label('Valor')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::number('price', null ,['class'=>'form-control'])!!}</div>
    </div> 
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">{!!Form::submit('Actualizar',['class'=>'col-md-5 btn col-xs-12 btn-primary'])!!}</div>
    </div>
  {!!Form::close()!!}


    {!!Form::open(['route'=> ['account.destroy',$account->id],'method'=>'DELETE','class'=>'form-horizontal form-label-left'])!!}
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">{!!Form::submit('Eliminar',['class'=>'col-md-5 btn col-xs-12 btn-danger'])!!}</div>
    </div>
  {!!Form::close()!!}


@endsection
