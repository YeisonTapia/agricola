<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Artrille - Agricola Industrial</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
{!!Html::style ('/frontend/css/bootstrap.min.css')!!}
{!!Html::style ('/frontend/css/fancybox/jquery.fancybox.css')!!}
{!!Html::style ('/frontend/css/flexslider.css')!!}
{!!Html::style ('/frontend/css/style.css')!!} 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper" class="home-page">

	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/frontend/img/logo.png') }}" alt="logo"/></a>

                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/') }}">Inicio</a></li> 
						 <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Nosotros <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Empresa</a></li>
                            <li><a href="#">Mision</a></li> 
                            <li><a href="#">Vision</a></li>
                        </ul>
                    </li> 
						<li><a href="#">Servicios</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="{{ url('/auth/login') }}">Ingresar</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	@yield('content')
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Contactenos</h5>
					<address>
					<strong>Taller Agricola Central</strong><br>
					<br>
					 Ibagué - Tolima </address>
					<p>
						<i class="icon-phone"></i> (38) 2615679 - (38) 2624427 <br> (+57) 3162401987<br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			
			<div class="col-md-5 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; ColCoin Soluciones 2017 All right reserved.</span>
						</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{!!Html::script('/frontend/js/jquery.js')!!}
{!!Html::script('/frontend/js/jquery.easing.1.3.js')!!}
{!!Html::script('/frontend/js/bootstrap.min.js')!!}
{!!Html::script('/frontend/js/jquery.fancybox.pack.js')!!}
{!!Html::script('/frontend/js/jquery.fancybox-media.js')!!}
{!!Html::script('/frontend/js/jquery.flexslider.js')!!}
{!!Html::script('/frontend/js/animate.js')!!}
<!-- Vendor Scripts -->
{!!Html::script('/frontend/js/modernizr.custom.js')!!}
{!!Html::script('/frontend/js/jquery.isotope.min.js')!!}
{!!Html::script('/frontend/js/jquery.magnific-popup.min.js')!!}
{!!Html::script('/frontend/js/animate.js')!!}
{!!Html::script('/frontend/js/custom.js')!!}
</body>
</html>	