<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="icon" href="{{url('/image/logo_del_transparent.png')}}">
	<title>Perencanaan dan Realisasi Anggran Prodi</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('/css/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/css/active.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body>
 
	<header>
    <div class="header row container-fluid">
            <div class="col-md-1 logo" >
                <img src="{{asset('/image/logo_del_transparent.png')}}" alt="" style="display: block; margin: 0 auto;">
            </div>
            <div class="col-md-6 title">
                    <p>Himpunan Mahasiswa</p>
              
                    <p>Tekonologi Rakayasa Perangkat Lunak</p>
            </div>
            <div class="col-md-5X title2">
                    <p>Perencanaan dan Realisasi Anggaran Prodi</p>
            </div>
        </div>
        <nav id="sticker" class="navbar navbar-expand-lg nav1" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <a class="navbar-brand" href="#">Navbar</a>
                        <div class="col-md-9">
                        <div class="col-md-12" >
                            <div class="nav-btn1 collapse navbar-collapse" id="navbarTogglerDemo03" >
                            <?php if(session()->get('role')=="KA"){ ?>
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'home') ? 'active' : '' }} " href="/home">Beranda <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'programKegiatan') ? 'active' : '' }} " href="/programKegiatan">Program Kegiatan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'realisasi') ? 'active' : '' }} " href="/realisasi">Realisasi</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'perencanaan') ? 'active' : '' }} " href="#">Perencanaan</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'prestasi') ? 'active' : '' }} " href="/prestasi">Prestasi</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link {{ (\Request::route()->getName() == 'indexLaporanProses') ? 'active' : '' }} " href="/laporan/index">Laporan</a>
                                    </li>
                                </ul>
                                <!-- <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form> -->
                                 <?php } ?>
                                 <?php if(session()->get('role')=="Mahasiswa"){ ?>
                                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link {{ (\Request::route()->getName() == 'home') ? 'active' : '' }}" href="/home">Beranda <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'programKegiatan') ? 'active' : '' }} " href="/programKegiatan">Program Kegiatan</a>
                                </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (\Request::route()->getName() == 'requestKegiatan') ? 'active' : '' }}" href="{{route('requestKegiatan')}}">Request Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (\Request::route()->getName() == 'uploadLaporan') ? 'active' : '' }}" href="{{route('uploadLaporan')}}">Upload Laporan</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="#">Kwitansi</a>
                                    </li> -->
                                    </ul>
                                <?php } ?>
                                <?php if(session()->get('role')=="Dosen"){ ?>
                                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link {{ (\Request::route()->getName() == 'home') ? 'active' : '' }}" href="/home">Beranda <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'programKegiatan') ? 'active' : '' }} " href="/programKegiatan">Program Kegiatan</a>
                                </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (\Request::route()->getName() == 'requestKegiatanDosen') ? 'active' : '' }}" href="{{route('requestKegiatanDosen')}}">Request Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (\Request::route()->getName() == 'uploadLaporanDosen') ? 'active' : '' }}" href="{{route('uploadLaporanDosen')}}">Upload Laporan</a>
                                    </li>
                                
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="#">Kwitansi</a>
                                    </li> -->
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if(session()->get('role')=="KA"){ ?>
                        <div class="nav-btn col-md-12">
                            <div class="nav-btn1 collapse navbar-collapse" id="navbarTogglerDemo03">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'cetakLaporan') ? 'active' : '' }} " href="/cetakLaporan">Cetak Laporan</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'kwitansi') ? 'active' : '' }} " href="/kwitansi">Kwitansi</a>
                                </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="nav-link {{ (\Request::route()->getName() == 'revisi') ? 'active' : '' }} " href="/revisi">Revisi</a>
                                    </li> -->
                                <li class="nav-item">
                                    <a class="nav-link {{ (\Request::route()->getName() == 'permohonan') ? 'active' : '' }} " href="/permohonan/index">Permintaan</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-3">
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link notification" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="bell fa fa-bell-o"></span>
                                <span class="badge">3</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href=""><span class="fa fa-user"></span><?php echo session()->get('username'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}"><span class="fa fa-sign-out"></span> Keluar</a>
                            </li>
                            </ul>
                        </div>
                    </div>
        </nav>
	</header>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer class="container-fluid" style="background: #343a40;color:blue;margin-top:10%;" >
        <div class="row">
            <div class="col-md-4">
            
            </div>
            <div class="col-md-4">
                <p style="text-align:center;">&copy; <a href="">D4 Teknologi Rekayasa Perangkat Lunak IT DEL</p></a>
            </div>
            <div class="col-md-4">
            
            </div>

            </div>
	</footer>
 
</body>
</html>