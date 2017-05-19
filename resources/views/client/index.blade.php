@extends('admin.principal')

@section('content')
	<div class="right_col" role="main">
       	<div class="container">
			<div class="row">
				<h3 class="text-center">Listado de Cliente</h3>
				<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Documento</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1111111</td>
      <td>Cliente</td>
      <td>uno</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2222222</td>
      <td>Cliente</td>
      <td>dos</td>
    </tr>
  </tbody>
</table>
			</div>
		</div>
	</div>
@endsection