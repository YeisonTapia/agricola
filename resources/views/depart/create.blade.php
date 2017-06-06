  <h3 class="text-center">CREAR NUEVO DEPARTAMENTO</h3>
  {!!Form::open(['route'=>'depart.store','method'=>'POST','class'=>'form-horizontal form-label-left'])!!}
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Nombre departamento')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('namedepart',null,['class'=>'form-control'])!!}</div> 
    </div>
    <br>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">{!!Form::submit('Registar',['class'=>'col-md-5 btn col-xs-12 btn-success'])!!}</div>
    </div>
  {!!Form::close()!!}