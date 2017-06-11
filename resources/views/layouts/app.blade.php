<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sentinel - Armazenamento de Grãos Inteligente</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Materialize -->
    <link href="/assets/bower_components/materialize/dist/css/materialize.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
      <nav class="blue darken-4" role="navigation">
        <div class="nav-wrapper container-fluid" style="padding-left: 1%;">
          <!-- Logo Section -->
          <a id="logo-container" href="#" class="brand-logo">
            <img src="images/logo.png" width="230" class="responsive-img fix-logo"> 
          </a>
        </div>
      </nav>

      @yield('content')
    </div>
    
    <!-- jQuery -->
    <script src="/assets/bower_components/jquery/dist/jquery.js" type="text/javascript"></script>
    <!-- Materialize -->
    <script src="/assets/bower_components/materialize/dist/js/materialize.js" type="text/javascript"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
