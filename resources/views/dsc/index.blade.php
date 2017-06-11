@extends('admin.principal')

<?php $message=Session::get('message') ?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Declaracion  creada correctamente
</div>
@endif

@section('content')

<h1>Listado de declaraciones de soporte</h1>
<div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar Clientes">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">Buscar</button>
            </span>
          </div>
      </div>
    </div>
<table class="table">
  <thead>
    <th>Codigo</th>
    <th>Fecha</th>
    <th>N° Contrato</th>
    <th>Valor Contrato</th>
    <th>Opciones</th>
  </thead>
  @foreach($dscs as $dsc)
  <tbody>
    <td>{{ $dsc->id }}</td>
    <td>{{ $dsc->fecha }}</td>
    <td>{{ $dsc->Num_Cont }}</td>
    <td>{{ number_format($dsc->val_contra)}}.oo</td>
    <td>
      {!!link_to_route('dsc.edit', $title = 'EDITAR', $parameters = $dsc->id, $attributes = ['class'=>'btn btn-success'])!!}
      {!!link_to_route('dsc.show', $title = 'PDF', $parameters = $dsc->id, $attributes = ['class'=>'btn btn-danger'])!!}
      
      

    </td>
  </tbody>
  @endforeach
</table>
{!! $dscs->render() !!}
@endsection