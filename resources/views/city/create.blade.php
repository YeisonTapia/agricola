  @extends('admin.principal')
  @section('content')
  <h3 class="text-center">CREAR NUEVA CIUDAD</h3>
  {!!Form::open(['route'=>'city.store','method'=>'POST','class'=>'form-horizontal form-label-left'])!!}
    <div class="form-group">
    	<div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Nombre ciudad')!!}</div>
      	<div class="col-md-5 col-xs-12">{!!Form::text('namedecity',null,['class'=>'form-control'])!!}</div><br><br>
       	<div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Nombre Departamento')!!}</div>
       	<div class="col-md-5 col-xs-12">
      	<select name="depart_id" id="depart_id" class="form-control">
			@foreach($departs as $depart)
				<option value="{{ $depart->id }}">{{ $depart->namedepart }}</option>
			@endforeach
      	</select>
      </div> 
    </div>
    <br>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">{!!Form::submit('Registar',['class'=>'col-md-5 btn col-xs-12 btn-success'])!!}</div>
    </div>
  {!!Form::close()!!}
  @endsection