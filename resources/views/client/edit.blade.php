@extends('admin.principal')
@section('content')
  <h3 class="text-center">Actualizar datos de usuario</h3><hr>
  {!!Form::model($client,['route'=> ['client.update',$client->id],'method'=>'PUT','class'=>'form-horizontal form-label-left'])!!}
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Nombres')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa los nombres del cliente'])!!}</div> 
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Apellidos')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Ingresa los apellidos del cliente'])!!}</div>    
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('No. de Documento')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('identification',null,['class'=>'form-control','placeholder'=>'Ingresa el documento del cliente'])!!}</div>
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Email')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Correo elecronico del cliente'])!!}</div>
    </div>

    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Direccion')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('address',null,['class'=>'form-control','placeholder'=>'Ingresa la direccion del cliente'])!!}</div>    
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Telefono')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ingresa Telefono del cliente'])!!}</div>    
    </div>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">{!!Form::submit('Actualizar',['class'=>'col-md-3 btn col-xs-12 btn-primary'])!!}</div>
    </div>
  {!!Form::close()!!}

  {!!Form::model($client,['route'=> ['client.destroy',$client->id],'method'=>'DELETE','class'=>'form-horizontal form-label-left'])!!}

  {!!Form::submit('Eliminar',['class'=>'col-md-3 btn col-xs-12 btn-danger'])!!}


  {!!Form::close()!!}
@endsection
