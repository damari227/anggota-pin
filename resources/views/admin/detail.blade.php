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
  <link rel="stylesheet" href="{{ url('library-admin/css/detaill.css') }}"/>
  <link rel="stylesheet" href="{{ url('library-admin/css/navbarr.css') }}"/>


    <title>{{ $title }} - Pejuang Islam Nusantara</title>
  </head>
  <body>
  
   



    <div class="container mt-5 pt-2">

      @foreach($data_detail as $dt)
      <div class="part bg-white shadow-sm p-3 rounded-sm mb-2">

        <div class="d-flex">
          <div class="rounded-circle profile-image">
            <img src="{{ url('library/img/images.jpg') }}">
          </div>

          <!--- Bagian ringkasan --->
          <div class="col ml-3 pt-4">
            <h3 class="border border-success border-top-0 border-bottom-0 border-right-0 pl-2 mb-3"><b>{{ $dt->nama_depan }} {{ $dt->nama_blkg }}</b></h3>
            <z class="bg-warning text-white p-2">{{ $dt->level }}</z>
            
          </div>
        </div>

        <hr>

        <div class="alert alert-warning mt-2">
          Harap jaga kerahasiaan data setiap anggota
        </div>

        <div class="panel mt-4">

          <div class="panel-item"></div>
          
          <div class="panel-item">
 
            <!-- b class="bg-secondary p-2">Data anggota</b -->
            
            <table>
              
              <thead>

                <td>
                  <b class="bg-white p-2 text-dark border border-bottom-0">Data anggota</b>
                </td>

              </thead>

              <tbody class="border">
                <tr>
                  <td>Nama depan : </td>
                  <td>{{ $dt->nama_depan }}</td>
                </tr>

                <tr>
                  <td>Nama belakang : </td>
                  <td>{{ $dt->nama_blkg }}</td>
                </tr>

                <tr>
                  <td>No PIN : </td>
                  <td>{{ $dt->no_pin }}</td>
                </tr>

                <tr>
                  <td>Provinsi : </td>
                  <td>{{ $dt->prov }}</td>
                </tr>

                <tr>
                  <td>Kota/Kabupaten : </td>
                  <td>{{ $dt->kota }}</td>
                </tr>

                <tr>
                  <td>Kecamatan : </td>
                  <td>{{ $dt->kec }}</td>
                </tr>

                <tr>
                  <td>Desa/Kelurahan : </td>
                  <td>{{ $dt->des }}</td>
                </tr>

                <tr>
                  <td>Email : </td>
                  <td>{{ $dt->email }}</td>
                </tr>

                <tr>
                  <td>Instagram : </td>
                  <td>{{ $dt->ig }}</td>
                </tr>

                <tr>
                  <td>Facebook : </td>
                  <td>{{ $dt->fb }}</td>
                </tr>

                <tr>
                  <td>Twitter : </td>
                  <td>{{ $dt->twitter }}</td>
                </tr>
              </tbody>

            </table>

          </div>

        </div>

      </div>
      @endforeach

    </div>

    <div class="footer bg-success mt-5 text-white">
      <div class="container pt-3 pb-3 text-center">
        
        &copy; <b>Pejuang Islam Nusantara</b> | 2020

      </div>
    </div>

    <!-- Navbar -->
    <nav pl-2>
      <div class="logo mr-auto">
        <h5>Pejuang Islam Nusantara</h5>
      </div>


      <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
      </div>


      <ul>

        <li class="mb-5"><a href="{{ url('/admin') }}">Dashboard</a></li>
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