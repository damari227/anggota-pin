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
  <link rel="stylesheet" href="{{ url('library-admin/css/anggota.css') }}"/>
  <link rel="stylesheet" href="{{ url('library-admin/css/navbarr.css') }}"/>


    <title>{{ $title }} - Pejuang Islam Nusantara</title>
  </head>
  <body>
  
   

    <div class="container mt-5 pt-3">

      <div class="part mb-2 bg-white shadow-sm rounded p-2">
        
        <form action="" method="post">
          
          <div class="input-group">
            <input name="search" class="form-control form-control-sm" placeholder="Cari anggota">
            <button class="bg-success text-white border-0 pl-3 pr-3">Cari</button>
          </div>

        </form>

      </div>


      <div class="part bg-white p-4 shadow-sm rounded">
        
        
        <h5 class="text-success"><b>Daftar anggota</b></h5>
        

        <div class="scroll border">

          <table class="table border border-top-0 border-left-0 border-right-0">
            <thead class="bg-success text-white">

              <th>No PIN</th>
              <th>Nama</th>
              <th>Domisili</th>
              <th>Email</th>
              <th>No ponsel</th>
              <th>Aksi</th>

            </thead>

            <tbody>
              
              @foreach($data as $dt)
              <tr>
                <td>{{ $dt->no_pin }}</td>
                <td>{{ $dt->nama }}</td>
                <td>{{ $dt->prov }}</td>
                <td>{{ $dt->email }}</td>
                <td>{{ $dt->no_telp }}</td>
                <td>
                  <form method="post" action="" class="d-inline">
                    @csrf
                    <button class="badge badge-danger p-2 border-0">Hapus</button>
                  </form>

                  <a href="{{ url('/admin/detail') }}/{{ $dt->id }}" class="badge badge-info p-2">Detail</a>
                  <a href="{{ url('/admin/detail') }}/{{ $dt->id }}" class="badge badge-warning p-2 text-white">Kirim pesan</a>
                </td>
              </tr>
              @endforeach

            </tbody>

          </table>

        </div>

        

      </div>

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