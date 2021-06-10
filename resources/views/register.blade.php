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
  <link rel="stylesheet" href="{{ url('library/css/register.css') }}"/>
  <link rel="stylesheet" href="{{ url('library-admin/css/navbarr.css') }}"/>
  <link rel="icon" href="{{ url('logo-pin.jpg') }}">


    <title>{{ $title }} - Pejuang Islam Nusantara</title>
  </head>
  
  <style type="text/css">
    nav {
      box-shadow: 0 0 10px #28a745;
    }
  </style>

  <body>
  
   

    <div class="jumbotron mt-4 bg-success">

    </div>

    <form action="" method="post">
      @csrf
      <div class="bg-white p-3 form-group rounded shadow-sm">
        

        <label><i class="text-primary">Nama Depan</i></label>
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text">N</span>
          </div>
          <input class="form-control" name="nama_depan" value="{{ old('nama_depan') }}">
        </div>



        <label><i class="text-primary">Nama belakang</i></label>
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text">N</span>
          </div>
          <input class="form-control" name="nama_belakang" value="{{ old('nama_belakang') }}">
        </div>



        <label><i class="text-primary">Tanggal lahir</i></label>
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text">N</span>
          </div>
          <input class="form-control" name="tanggal_lahir">
        </div>



        <label><i class="text-primary"></i></label>
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text">N</span>
          </div>
          <input class="form-control" name="nama-depan">
        </div>


        <label><i class="text-primary">Nama lengkap</i></label>
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text">N</span>
          </div>
          <input class="form-control" name="nama-depan">
        </div>

      </div>
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