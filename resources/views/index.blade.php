<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/library/css/bootstrap.min.css') }}"/>
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
	
	
	<!-- My CSS -->
  <link rel="stylesheet" href="{{ url('library/css/indexx.css') }}"/>
  <link rel="stylesheet" href="{{ url('library-admin/css/navbarr.css') }}"/>
  <link rel="icon" href="{{ url('logo-pin.jpg') }}">


    <title>{{ $title }} - Pejuang Islam Nusantara</title>
  </head>

  <body>
  
   

    <div class="jumbotron mt-4 bg-success">

    </div>

    <form class="bg-white shadow rounded" action="" method="post">
      <h4 class="mb-3">Masuk</h4>
      @if(session('login_dahulu'))
      <div class="alert alert-danger">
        {{ session('login_dahulu') }}
      </div>
      @endif

      @csrf
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white" style="font-size: 20px">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.784 14c-.497-1.27-1.988-3-5.784-3s-5.287 1.73-5.784 3h11.568z"/>
              <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
          </span>
        </div>
        <input name="no_pin" class="form-control border-left-0" placeholder="No PIN">
      </div>


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white" style="font-size: 20px">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
          </span>
        </div>
        <input name="kata_sandi" class="form-control border-left-0" placeholder="Kata sandi">
      </div>

      <div class="alert alert-info mt-3">
        Belum daftar? <b><a href="{{ url('/register') }}">Daftar Yuk!</a></b>
      </div>

      <button class="btn btn-success">Masuk</button>

    </form>

    <!-- Navbar -->
    <nav class="bg-success border-0">
      <img src="{{ url('/logo-pin.jpg') }}" width="40px" class="rounded-circle mr-3">
      <div class="logo mr-auto mt-2">
        <h5 class="text-white">Pejuang Islam Nusantara</h5>
      </div>


      <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
      </div>


      <ul>

        <li class="mb-5"><a href="">Dashboard</a></li>
        <li class="mb-5"><a href="{{ url('/admin/anggota') }}">Anggota</a></li>
        <li class="mb-5"><a href="{{ url('/admin/notifikasi') }}">Notifikasi</a></li>
        <li class="mb-5"><a href="{{ url('/admin/logout') }}">Keluar</a></li>
        <li class="mb-5"><a href="">Download</a></li>

      </ul>


    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url('library/js/jquery-3.4.1.js') }}" type='text/javascript'></script>
    <script src="{{ url('library/js/popper.min.js') }}" type='text/javascript'></script>
    <script src="{{ url('library/js/bootstrap.min.js') }}" type='text/javascript'></script>
    <script type="text/javascript">
      $('.menu-toggle').click(function(){
        $('nav ul').toggleClass('slide');
      });
    </script>
  </body>
</html>