<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/library/css/bootstrap.min.css') }}"/>
	
	<!-- Fonts -->
	<link href="{{ url('library/fonts/lemonada/Lemonada-VariableFont_wght.ttf') }}" rel="stylesheet">
    <link href="{{ url('library/fonts/baloo_tamma2/BalooTamma2-Regular.ttf') }}" rel="stylesheet">
	<link href="{{ url('library/fonts/recursive/Recursive-VariableFont_CASL,CRSV,MONO,slnt,wght.ttf') }}" rel="stylesheet">
	
	
	<!-- My CSS -->
  <link rel="stylesheet" href="{{ url('library/css/register.css') }}"/>
  <link rel="stylesheet" href="{{ url('library/css/navbar.css') }}"/>


    <title>Registrasi - Pejuang Islam Nusantara</title>
  </head>

  <script src="{{ url('library/js/jquery-3.4.1.js') }}" type='text/javascript'></script>

  <body>
  
   
    <!-- Navbar -->
    <nav class="bg-success">
      <div class="logo">
        <b class="text-white">Pejuang Islam Nusantara</b>
      </div>

      <ul class="bg-success">

        <div class="menu-toggle menu-toggle-close">
          <span></span>
          <span></span>
        </div>

        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Service</a></li>
        <li><a href="">Account</a></li>
        <li><a href="">Galery</a></li>
      </ul>

      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>


    </nav>

      @if(session('register_status_work'))
        <div class="alert alert-success">
          {{ session('register_status_work') }}
        </div>
      @endif


      @if(session('register_status_failed'))
        <div class="alert alert-danger">
          {{ sessin('register_status_failed') }}
        </div>
      @endif





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url('library/js/popper.min.js') }}" type='text/javascript'></script>
    <script src="{{ url('library/js/bootstrap.min.js') }}" type='text/javascript'></script>
    <script type="text/javascript">
      $('.menu-toggle').click(function(){
        $('nav ul').toggleClass('slide');
      });
    </script>
  </body>
</html>