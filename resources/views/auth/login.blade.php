@extends('app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="text-center">Inicio de sesion al sistema</h3>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Hubo algunos problemas con su inicio de sesion.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
						<div class="row">
							<div class="col-md-12">
								<form class="form-horizontal"  role="form" method="POST" action="{{ url('/auth/login') }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
										<label class="col-md-4 control-label">Correo Electronico</label>
										<div class="col-md-6">
											<input type="email" class="form-control" name="email" value="{{ old('email') }}">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Contraseña</label>
										<div class="col-md-6">
											<input type="password" class="form-control" name="password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="remember"> Recordarme
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
											<button type="submit" class="btn btn-success">Acceder</button>
											<a class="btn btn-link" href="{{ url('/password/email') }}">Olvido su contraseña ?</a>
										</div>
									</div>
								</form>
							</div>
						</div>				
					</div>
				</div>
			</div>
	</div>
@endsection
