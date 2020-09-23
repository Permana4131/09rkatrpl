@extends('master') 
 
@section('konten')
<header>
	<div class="navbar" role="navigation">
		<div class="container">
    	<div class="navbar-header">
      </div>
      <div class="collapse navbar-collapse" id="mynav">
      	<ul class="nav navbar-nav navbar-right">
        	<li><a href="#about">About</a></li>
          <li><a href="#clients">Clients</a></li>
          <li><a href="#process">Process</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#blogs">Blogs</a></li>
        </ul>
      </div>
     </div>	
	</div>
    <!-- <div class="banner">
      <h2>We help you achieve your goals</h2>
      <div class="info">
        <a href="#process" title="">See our process</a>
        <a href="#clients" title="">See our clients</a> 
      </div>
    </div> -->
 </header>
  
<div class="container-fuild" style="padding:1%;">
<div class="col-md-12">
            <!-- <div class="row">
            <div class="col-md-3">
                <hr style="height:5px;border:0;box-shadow:0 10px 10px -10px #8c8c8c inset;">
            </div>

            <div class="col-md-6" style="text-align: center;">
                <div class="col-md-12">
                    <h2>PRESTASI DOSEN DAN MAHASISWA</h2>
                </div>
                <div class="col-md-12">
                    <h2>'HIMATERA'</h2>
                </div>
            </div>
            

            <div class="col-md-3">
                <hr style="height:5px;border:0;box-shadow:0 10px 10px -10px #8c8c8c inset;">
            </div>
            </div>
        </div> -->
        <div class="col-md-12" style="padding:1%;"></div>

<fieldset class="scheduler-border">
        <legend class="scheduler-border"><p>Realisasi Kegiatan (Bukti)</p></legend>
        <div> 
                    <div class="row">
                    <div class="col-lg-7">
                        
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="form-control" placeholder="Masukkan NIM" id="inCari">
                    </div>
                    <div class="col-lg-2">
                        <input type="button" id="button"  data-animation="fadeInUp" data-delay="700ms" class="btn-tema" onclick="cari()" value="Cari">
                    </div>
                </div>
                <div class="col-md-12" style="padding:1%;"></div>
            <a class="as" href="#">
            <div class="col-md-12" style="">
                <div class="row" style="padding:1%;">
                    <div class="col-md-2">
                        <b><p>No</p></b>
                    </div>
                    <div class="col-md-3">
                        <b><p>NIM/NIP</p></b>
                    </div>
                    <div class="col-md-3">
                        <b><p>Nama</p></b>
                    </div>
                    <div class="col-md-2">
                        <b><p>Tanggal Upload</p></b>
                    </div>
                    <div class="col-md-2">
                        <b><p>Bukti</p></b>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <?php for($i=0;$i<6;$i++){ ?>
            <div class="col-md-12" style="background:#EBEDEF;display: block; margin: auto;">
                <div class="row" style="padding:1%;">
                    <div class="col-md-2">
                        <p>1</p></b>
                    </div>
                    <div class="col-md-3">
                        <p>11418017</p></b>
                    </div>
                    <div class="col-md-3">
                        <p>Leonard Sihombing</p></b>
                    </div>
                    <div class="col-md-2">
                        <p>27 Maret 2020</p></b>
                    </div>
                    <div class="col-md-2">
                        <img src="../image/ctff.png" alt="">
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        
       

        

    </fieldset>
    <div class="col-md-12" style="padding:1%;"></div>

    <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    
                </div>
                <div class="col-md-3">
                    <div class="pagination1" style="float: right;">
                        <a href="#">&laquo;</a>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    
</div>
 
@endsection