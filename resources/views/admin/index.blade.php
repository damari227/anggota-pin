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
  <link rel="stylesheet" href="{{ url('library-admin/css/index.css') }}"/>
  <link rel="stylesheet" href="{{ url('library-admin/css/navbarr.css') }}"/>
  <link rel="icon" href="{{ url('logo-pin.jpg') }}">


    <title>{{ $title }} - Pejuang Islam Nusantara</title>
  </head>


  <script type="text/javascript" src="{{ url('/library-admin/js/Chart.js') }}"></script>

  <body>
  
   



    <div class="container mt-5 pt-2 mb-5">
      
      <div class="part bg-white shadow-sm p-3 rounded-sm mb-2">
        <form action="" method="post">
          @csrf
          <div class="input-group">
            <input type="text" placeholder="Cari anggota..." name="cari" class="form-control form-control-sm mr-1">
            <button class="bg-success pl-3 pr-3 text-white border-0 rounded">Cari</button>
          </div>
        </form>

        <div class="alert alert-info mt-2">
          <h5>Selamat datang admin...</h5>
          <a>Kami percaya bahwa anda bisa mengelola data dengan bijak</a>
        </div>

      </div>


      <div class="stats mb-3">
        <div>
          <div class="panel mb-2 mt-2">
              
            <div class="panel-items shadow-sm p-2 pt-3 bg-white rounded">
              <h6 class="panel-title text-success">Anggota</h6>
              <h5 class="panel-subtitle">{{ $total_anggota }}</h5>
            </div>

            <div class="panel-items shadow-sm p-2 pt-3 bg-white rounded">
              <h6 class="panel-title text-success">Notifikasi</h6>
              <h5 class="panel-subtitle">2</h5>
            </div>

            <div class="panel-items shadow-sm p-2 pt-3 bg-white rounded">
              <h6 class="panel-title text-success">Pengunjung/hari</h6>
              <h5 class="panel-subtitle">2</h5>
            </div>

          </div>
        </div>


        <div>
          <div class="bg-white shadow-sm rounded-sm pr-3 mb-3">
            <canvas id="myChart"></canvas>
          </div>
        </div>

      </div>

      <div class="part bg-white shadow-sm p-3 rounded-sm">
        
        <h6><a href="{{ url('/admin/anggota') }}" style="text-decoration: none;"><b class="pb-1 d-inline pr-2 text-success">Daftar ringkasan anggota</b></a></h6>

        <hr>

        <div class="row m-2">
            
          @foreach($data as $dt)
          <?php
          if($dt->level == 'Admin'){
            $bg = 'badge-primary';
          } else if($dt->level == 'Anggota'){
            $bg = 'badge-warning';
          }
          ?>
          <div class="card p-2 border-0 shadow-sm">
            <div class="d-flex">
              <div class="rounded-circle profile-image">
                <img src="{{ url('library/img/images.jpg') }}">
              </div>
                <div class="col">
                  <b>{{ $dt->nama_depan }} {{ $dt->nama_blkg }}</b><br>
                  <span class="badge <?= $bg;?> p-1 text-white">{{ $dt->level }}</span><br>
                  <a href="{{ url('/admin/detail') }}/{{ $dt->id }}">Detail</a>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>

    </div>


    <div class="footer bg-success mt-5 text-white">
      <div class="container pt-3 pb-3 text-center">
        
        &copy; <b>Pejuang Islam Nusantara</b> | <?=date('Y');?>

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


    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli","Agustus","September","Oktober","November","Desember"],
        datasets: [{
          label: 'Pendatang tahun ini({{ date("Y") }})',
          data: [ {{ $Januari }}, 
                  {{ $Februari }},
                  {{ $Maret }},
                  {{ $April }},
                  {{ $Mei }},
                  {{ $Juni }},
                  {{ $Juli }},
                  {{ $Agustus }},
                  {{ $September }},
                  {{ $Oktober }},
                  {{ $November }},
                  {{ $Desember }}
                  ],
          backgroundColor: [
          'rgba(0, 100, 0, 0.4)',
          'rgba(0, 100, 0, 0.4)',
          'rgba(0, 100, 0, 0.4)',
          'rgba(0, 100, 0, 0.4)',
          'rgba(0, 100, 0, 0.4)',
          'rgba(0, 100, 0, 0.4)',
          'rgba(0, 100, 0, 0.4)',
          'rgba(0, 100, 0, 0.4)'
          ],
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
    </script>
  </body>
</html>