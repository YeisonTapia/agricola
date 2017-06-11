@extends('admin.principal')
@section('content')
  <h1 class="text-center">CREAR CLIENTE</h1><hr>
  {!!Form::open(['route'=>'client.store','method'=>'POST','class'=>'form-horizontal form-label-left'])!!}
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
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Departamento')!!}</div>
      <div class="col-md-5 col-xs-12"> {!!Form::select('depart',$departs, null , ['id'=>'state','class'=>'form-control'])!!}</div> 
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Ciudad')!!}</div>
      <div class="col-md-5 col-xs-12">{!! Form::select('city',['placeholder'=>'Selecciona'], null, ['id'=>'town','class'=>'form-control'])!!}</div>    
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
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">{!!Form::submit('Registar Cliente',['class'=>'col-md-5 btn col-xs-12 btn-success'])!!}</div>
    </div>
  {!!Form::close()!!}

    {!! Html::script('js/jquery-3.2.1.min.js') !!}
    {!! Html::script('js/dropdown.js') !!}


@endsection


