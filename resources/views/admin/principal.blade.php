<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador Agricola central</title>
    <!-- Bootstrap -->
    {!!Html::style ('/css/bootstrap.min.css')!!}   
    <!-- Font Awesome -->
    {!!Html::style ('/css/font-awesome.min.css')!!}
    <!-- NProgress -->
    {!!Html::style ('/css/nprogress.css')!!}
    <!-- jQuery custom content scroller -->
    {!!Html::style ('/css/jquery.mCustomScrollbar.min.css')!!}
    <!-- Custom Theme Style -->
    {!!Html::style ('/css/custom.min.css')!!}
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('/admin') }}" class="site_title">
                <i class="fa fa-steam-square"></i> <span>Agricola Central</span>
              </a>
            </div>
              <div class="clearfix"></div>
              <!-- menu profile quick info -->
              <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/b666f811889067.562541eff3013.png" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-briefcase"></i> Cuentas de cobro <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/account/') }}">Consultar Cuentas de Cobro</a></li>
                      <li><a href="{{ url('/account/create') }}">Crear Cuenta de Cobro</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/client/') }}">Consultar Clientes</a></li>
                      <li><a href="{{ url('/client/create') }}">Crear Clientes</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Declaracion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/dsc') }}">Consultar Declaracion</a></li>
                      <li><a href="{{ url('/dsc/create') }}">Crear Declaracion</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-database"></i> Nomina <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Nomina Fijos</a></li>
                      <li><a href="#">Nomina Colaboradores</a></li>
                      <li><a href="#">Empleados</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="{{ url('/auth/logout') }}" class="user-profile">
                    Salir
                    <span class=" fa fa-sign-out"></span>
                  </a>                 
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="container">
            <div class="row x_panel">
              @yield('content')
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            ColCoin Solutions - Soluciones web a la medida
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    {!!Html::script('/js/jquery.min.js')!!}    

    <!-- Bootstrap -->
    {!!Html::script('/js/bootstrap.min.js')!!}
    <!-- FastClick -->
    {!!Html::script('/js/fastclick.js')!!}
    <!-- NProgress -->
    {!!Html::script('/js/nprogress.js')!!}
    <!-- jQuery custom content scroller -->
    {!!Html::script('/js/jquery.mCustomScrollbar.concat.min.js')!!}
    <!-- Custom Theme Scripts -->
    {!!Html::script('/js/custom.min.js')!!}


    
  </body>
</html>