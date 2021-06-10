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
  <link rel="stylesheet" href="{{ url('library/css/beranda.css') }}"/>
  <link rel="stylesheet" href="{{ url('library/css/navbarr.css') }}"/>


    <title>{{ $title }} - Pejuang Islam Nusantara</title>
  </head>


  <body>
  @foreach($data_detail as $dt)
   <div class="container mt-5 pt-2">
     <div class="part bg-white p-3 shadow-sm rounded-sm d-flex">
       
        <div class="profile-image rounded-circle">
          <img src="{{ url('library/img/images.jpg') }}" class="">
        </div>

        <div class="ml-4 mt-2">
          <h3><b>{{ $dt->nama_depan.''.$dt->nama_blkg }}</b></h3>
          <span class="bg-success p-1 mt-4 text-white rounded">{{ $dt->level }}</span>
        </div>

     </div>
     @endforeach
   </div>
    

    <div class="footer bg-success mt-5 text-white">
      <div class="pb-4 pt-2 text-center">
        
        &copy; <b>Pejuang Islam Nusantara</b> | 2020

      </div>
    </div>

    <!-- Navbar -->
    <nav pl-2>
      <img src="{{ url('/logo-pin.jpg') }}" width="40px" class="rounded-circle mr-3">
      <div class="logo mr-auto mt-2">
        <h5>Pejuang Islam Nusantara</h5>
      </div>


      <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span><?php 
        if( 0 == 1){
          echo '';
        } else {
          echo '
            <div class="rounded-circle text-white" style="width: 12px; height: 12px; position: absolute; top: -5px; right: -5px; background: red;"></div>
          ';
        }
      ?>
      </div>
      
      

      <ul>

        <li class="mb-5"><a href="{{ url('/') }}">Beranda</a></li>
        <li class="mb-5"><a href="{{ url('/notifikasi') }}">Notifikasi</a></li>
        <li class="mb-5"><a href="{{ url('/logout') }}">Keluar</a></li>

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