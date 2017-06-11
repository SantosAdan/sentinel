<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    @section('title')
    @show

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize -->
    <link href="/assets/bower_components/materialize/dist/css/materialize.css" rel="stylesheet" type="text/css">

    <style type="text/css">
      body {
        padding-left: 229px;
        height: 100%;
      }

      .fix-logo {
        padding-top: 5%;
      }

      @media only screen and (max-width : 992px) {
        body {
          padding-left: 0;
        }

        .fix-logo {
          padding-top: 5%;
        }
      }
    </style>
  </head>

  <body>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li>
        <a href="#!">
          <i class="material-icons">info_outline</i>
          Sobre Nós
        </a>
      </li>
      <li class="divider"></li>
      {{-- Logout Section --}}
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
          <i class="material-icons red-text">power_settings_new</i>
          <span class="red-text">Sair</span>
        </a>
      </li>
      {{-- End of Logout Section --}}
    </ul>
    <!-- End of Dropdown Structure -->

    <!-- Navbar Structure -->
    <nav class="blue lighten-1" role="navigation">
      <div class="nav-wrapper container-fluid" style="padding-left: 1%;">
        <!-- Logo Section -->
        <a id="logo-container" href="#" class="brand-logo">
          <img src="images/logo.png" width="230" class="responsive-img fix-logo"> 
        </a>
        <!-- End of Logo Section -->
        
        <!-- Navbar Menu -->
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <!-- End of Navbar Menu -->

        <!-- SideBar -->
        <ul id="slide-out" class="side-nav fixed" style="width: 230px;">
          <li>
            <div class="userView">
              <div class="background">
                <img src="images/corn-bg.jpg" width="230">
                {{-- <img src="images/silo-default.jpg" width="230"> --}}
              </div>
              <a href="#!"><img class="circle" src="images/user-placeholder.png"></a>
              <a href="#!"><span class="white-text name"><b>{{ Auth::user()->name }}</b></span></a>
              {{-- <a href="#!"><span class="white-text email"><b>{{ Auth::user()->email }}</b></span></a> --}}
            </div>
          </li>
          <li>
            <a class="waves-effect waves-teal" href="{{ route('silo.index') }}">
              <i class="material-icons orange-text">dashboard</i>
              Silos
            </a>
          </li>
          {{-- <li>
            <a class="waves-effect waves-teal" href="#!">
              <i class="material-icons teal-text">dashboard</i>
              Dashboard
            </a>
          </li> --}}
          <li><div class="divider"></div></li>
          {{-- <li><a class="subheader">Submenu</a></li>
          <li>
            <a class="waves-effect waves-teal" href="#!">
              Third Link With Waves
            </a>
          </li> --}}
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <!-- End of SideBar -->
      </div>
    </nav>
    <!-- End of NavBar Structure -->
    
    @yield('content')

    @include('layouts._footer')
        
    <!-- jQuery -->
    <script src="/assets/bower_components/jquery/dist/jquery.js" type="text/javascript"></script>
    <!-- Materialize -->
    <script src="/assets/bower_components/materialize/dist/js/materialize.js" type="text/javascript"></script>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="/js/temperature_chart.js"></script>
    <script type="text/javascript" src="/js/moisture_chart.js"></script>
    <script type="text/javascript" src="/js/gas_chart.js"></script>
    <script type="text/javascript" src="/js/pressure_chart.js"></script>
    
    @section('custom_scripts')
    @show
    
    <script>
      // Initialize collapse button
      $(".button-collapse").sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
      });
    </script>
  </body>
</html>
