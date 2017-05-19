

@extends('admin.principal')

@section('content')
	<div class="right_col" role="main">
       	<div class="container">
			<div class="row">
			<h3 class="text-center">Crear Nuevo Cliente</h3>
				<form class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Nombres<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="last-name">Apellidos<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Numero de Documento<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="identification" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Email<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Ciudad<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Departamento<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Direccion<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Telefono<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

					<div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                          <button type="submit" class="col-md-5 btn btn-success">Guardar</button>
                          
                        </div>
                      </div>
					
                </form>
			</div>
		</div>
    </div>
@endsection
