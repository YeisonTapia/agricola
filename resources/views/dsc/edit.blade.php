@extends('admin.principal')
@section('content')
<h3 class="text-center">Actualizar datos DECLARACION</h3><br>
{!!Form::model($dsc,['route'=> ['dsc.update',$dsc->id],'method'=>'PUT','class'=>'form-horizontal form-label-left'])!!}
	<div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Fecha de la declaracion:')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control'])!!}</div> 
    </div>
	<div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Numero del Contrato:')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('Num_Cont',null,['class'=>'form-control','placeholder'=>'Ingresa los numero del contrato'])!!}</div> 
    </div>
    
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Actividad:')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('Actividad',null,['class'=>'form-control','placeholder'=>'Ingresa la Actividad'])!!}</div>
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Valor del contrato:')!!}</div>
      <div class="col-md-5 col-xs-12">{!!Form::text('val_contra',null,['class'=>'form-control','placeholder'=>'Ingresa valor del contrato'])!!}</div>
    </div>
    
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Aportes a al seguridad social?')!!}</div>
      <div class="col-md-5 col-xs-12">
      	<select id="apor_se_soci" name="apor_se_soci" class="form-control col-md-7 col-xs-12" required="required">
                      <option selected value="0"> Elige una opción </option>
                      <option>SI</option>
                      <option>NO</option>
         </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Aportes voluntarios de pension?')!!}</div>
      <div class="col-md-5 col-xs-12">
      	<select id="aport_volu" name="aport_volu" class="form-control col-md-7 col-xs-12" required="required">
                      <option selected value="0"> Elige una opción </option>
                      <option>SI</option>
                      <option>NO</option>
         </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Aportes AFC')!!}</div>
      <div class="col-md-5 col-xs-12">
      	<select id="aport_afc" name="aport_afc" class="form-control col-md-7 col-xs-12" required="required">
                      <option selected value="0"> Elige una opción </option>
                      <option>SI</option>
                      <option>NO</option>
         </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Estoy obligado a presentar declaracion de renta')!!}</div>
      <div class="col-md-5 col-xs-12">
      	<select id="decla_renta" name="decla_renta" class="form-control col-md-7 col-xs-12" required="required">
                      <option selected value="0"> Elige una opción </option>
                      <option>SI</option>
                      <option>NO</option>
         </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Mis ingresos corresponden a un porcentaje igual  o superior al 80% de la realizacion de una actividades economicas')!!}</div>
      <div class="col-md-5 col-xs-12">
      	<select id="ingre_corr" name="ingre_corr" class="form-control col-md-7 col-xs-12" required="required">
                      <option selected value="0"> Elige una opción </option>
                      <option>SI</option>
                      <option>NO</option>
         </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-3 col-xs-12 col-md-offset-2">{!!Form::label('Mis ingresos anuales superan las 4.073 UVT ($109.323.393)')!!}</div>
      <div class="col-md-5 col-xs-12">
      	<select id="ingre_anual" name="ingre_anual" class="form-control col-md-7 col-xs-12" required="required">
                      <option selected value="0"> Elige una opción </option>
                      <option>SI</option>
                      <option>NO</option>
         </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">{!!Form::submit('Actualizar',['class'=>'col-md-5 btn col-xs-12 btn-success'])!!}</div>
    </div>

{!!Form::close()!!}
  {!!Form::model($dsc,['route'=> ['dsc.destroy',$dsc->id],'method'=>'DELETE','class'=>'form-horizontal form-label-left'])!!}

  {!!Form::submit('Eliminar',['class'=>'col-md-3 btn col-xs-12 btn-danger'])!!}
  {!!Form::close()!!}
@endsection