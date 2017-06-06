@extends('admin.principal')
@section('content')
  <h1 class="text-center">CREAR CUENTA DE COBRO</h1><br>
  {!!Form::open(['route'=>'account.store','method'=>'POST','class'=>'form-horizontal form-label-left x_content'])!!}
    <div class="form-group">
      <div class="col-md-2 col-xs-12 col-md-offset-3">{!!Form::label('Fecha')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::date('date', \Carbon\Carbon::now(),['class'=>'form-control'])!!}</div> 
    </div>
    <div class="form-group">
      <div class="col-md-2 col-xs-12 col-md-offset-3">{!!Form::label('Cliente')!!}</div>
      <div class="col-md-5 col-xs-12"> 
      	<select name="client_id" id="client_id" class="form-control">
      	  <option value=""> --- Seleccione Cliente ---</option>
			     @foreach($clients as $client)
				    <option value="{{ $client->id }}">{{ $client->identification }} , {{ $client->name }} {{ $client->last_name }}</option>
			     @endforeach
      	</select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-2 col-xs-12 col-md-offset-3">{!!Form::label('Detalle')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::textarea('details',null,['class'=>'form-control','placeholder'=>'Ingresa aqui el detalle del trabajo realizado'])!!}</div>
    </div>
    <div class="form-group">
      <div class="col-md-2 col-xs-12 col-md-offset-3">{!!Form::label('Valor')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::number('price', '0',['class'=>'form-control'])!!}</div>
    </div> 
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">{!!Form::submit('Guardar Cuenta de Cobro',['class'=>'col-md-5 btn col-xs-12 btn-success'])!!}</div>
    </div>
  {!!Form::close()!!}
@endsection
