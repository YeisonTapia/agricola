@extends('admin.principal')

@section('content')
	<div class="right_col" role="main">
       	<div class="container">
			<div class="row">
			<h3 class="text-center">Crear Declaracion Soporte de cuenta</h3>
				<form class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Contrato No:<span class="required"></span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="last-name">Actividad<span class="required"></span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Valor Contrato<span class="required"></span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="identification" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Aportes a al seguridad social?<span class="required"></span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Aportes voluntarios de pension?<span class="required"></span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Aportes AFC<span class="required"></span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Estoy obligado a presentar declaracion de renta<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Mis ingresos corresponden a un porcentaje igual  o superior al 80% de la realizacion de una actividades economicas<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                      <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-xs-6" for="first-name">Mis ingresos anuales superan las 4.073 UVT ($109.323.393)<span class="required">*</span>
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