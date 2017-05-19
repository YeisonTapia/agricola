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
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    
    <!-- NProgress -->
    <link href="{{ asset('/css/nprogress.css') }}" rel="stylesheet">
    
    <!-- jQuery custom content scroller -->
    <link href="{{ asset('/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    

    <!-- Custom Theme Style -->
    <link href="{{ asset('/css/custom.min.css') }}" rel="stylesheet">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-steam-square"></i> <span>Agricola Central</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://scontent.fbog2-2.fna.fbcdn.net/v/t1.0-9/12390953_10153764860307071_1235058162630647716_n.jpg?oh=0c29cc22e0e9f7acb4eb6e4125e11ff0&oe=5979B0AF" alt="..." class="img-circle profile_img">
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
                      <li><a href="index.html">Consultar Cuenta de Cobro</a></li>
                      <li><a href="index2.html">Crear Cuenta de Cobro</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/client/') }}">Consultar Clientes</a></li>
                      <li><a href="{{ url('/client/create') }}">Crea Clientes</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Declaracion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Consultar Declaracion</a></li>
                      <li><a href="{{ url('/dsc') }}"">Crea Declaracion</a></li>
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
        @yield('content')
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
    
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('/js/nprogress.js') }}"></script>
    <!-- jQuery custom content scroller -->
    <script src="{{ asset('/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('/js/custom.min.js') }}"></script>
  </body>
</html>