@extends('app')

@section('content')

	<!-- end header -->
	<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="{{ asset('/frontend/img/slides/1.jpg') }}" alt="" />
                
                <div class="flex-caption">
                    <h3>Creative</h3> 
					<p>We create the opportunities</p> 
					 
                </div>
              </li>
              <li>
                <img src="{{ asset('/frontend/img/slides/2.jpg') }}" alt="" />

                <div class="flex-caption">
                    <h3>Solution</h3> 
					<p>Success depends on work</p> 
					 
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
 
	</section> 
	<section id="call-to-action-2">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-sm-9">
					<h3>Mejor servicio en Ibagué</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti</p>
				</div>
				<div class="col-md-2 col-sm-3">
					<a href="#" class="btn btn-primary">Leer Mas</a>
				</div>
			</div>
		</div>
	</section>
	
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">Nuestros Servicios</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
				<br/>
			</div>
		</div>

	 <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-cogs"></i>
                <div class="info-blocks-in">
                    <h3>Torno</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-cogs"></i>
                <div class="info-blocks-in">
                    <h3>Cepillo</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-cogs"></i>
                <div class="info-blocks-in">
                    <h3>Prensa Hidráulica</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
        </div>
<div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-cogs"></i>
                <div class="info-blocks-in">
                    <h3>Soldadura Eléctrica y Autógena</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-cogs"></i>
                <div class="info-blocks-in">
                    <h3>Servicio de maquinaria pesada</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-cogs"></i>
                <div class="info-blocks-in">
                    <h3>Corte con segueta </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
        </div>
	</div>
	</section>
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Nuestra Empresa</h2>
						<p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
						<p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

						<ul class="withArrow">
							<li><span class="fa fa-angle-right"></span> Lorem ipsum dolor sit amet</li>
							<li><span class="fa fa-angle-right"></span> consectetur adipiscing elit</li>
							<li><span class="fa fa-angle-right"></span> Curabitur aliquet quam id dui</li>
							<li><span class="fa fa-angle-right"></span> Donec sollicitudin molestie malesuada.</li>
						</ul>
						<a href="#" class="btn btn-primary">Leer mas</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="{{ asset('/frontend/img/about.png') }}" alt="About Images">
					</div>
				</div>
			</div>
		</div>
	</section>	  
	
@endsection
					
					
