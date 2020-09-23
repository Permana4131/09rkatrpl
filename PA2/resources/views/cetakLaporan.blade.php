@extends('master') 
 
@section('konten')
<!-- <header>
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
  
  </div>
 </header> -->
  
<div class="container-fluid">
<div class="col-md-12" style="padding:1%;"></div>

        <div class="col-md-12">
            <div class="row">
            <div class="col-md-3">
                <hr style="height:5px;border:0;box-shadow:0 10px 10px -10px #8c8c8c inset;">
            </div>

            <div class="col-md-6" style="text-align: center;">
                <div class="col-md-12">
                    <h2>LAPORAN DOSEN DAN MAHASISWA</h2>
                </div>
                <div class="col-md-12">
                    <h2>'HIMATERA'</h2>
                </div>
            </div>
            

            <div class="col-md-3">
                <hr style="height:5px;border:0;box-shadow:0 10px 10px -10px #8c8c8c inset;">
            </div>
            </div>
        </div>

        <div class="col-md-12" style="padding:1%;"></div>

        <div> 
                    <div class="row">
                    <div class="col-lg-7">
                        
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="form-control" placeholder="Masukkan Tahun yang ingin dicari" id="inCari">
                    </div>
                    <div class="col-lg-2">
                        <input type="button" id="button"  data-animation="fadeInUp" data-delay="700ms" class="btn-tema" onclick="cari()" value="Cari">
                    </div>
                </div>
                <div class="col-md-12" style="padding:1%;"></div>

        <?php for($i=0;$i<3;$i++){ ?>
        <div class="col-md-12 del" style="display: block; margin: auto;">
            <div class="row" style="padding:1%;">
                <div class="col-md-4" style="background:#2ECC71;padding:1%;border:0;box-shadow:10px -10px 10px -10px black inset;border: 1px solid #ddd;border-radius: 4px;padding: 4%;">
                    <b><p style="position:absolute;border: 1px solid black;">D4-TRPL</p></b>
                    <a href="#"></a><img src="../image/ctff.png" class="img-circle" alt="Gambar malas ngoding" width="45%" height="236" style="display: block; margin: auto;"></a>
                </div>
                <div class="col-md-4" style="background:#82E0AA ;padding:1%;border:0;box-shadow:10px -10px 10px -10px black inset;border: 1px solid #ddd;border-radius: 4px;padding: 4%">
                    <b><p style="position:absolute;border: 1px solid black;">D4-TRPL</p></b>
                    <a href="#"></a><img src="../image/ctff.png" class="img-circle" alt="Gambar malas ngoding" width="45%" height="236" style="display: block; margin: auto;"></a>
                </div>
                <div class="col-md-4" style="background:#2ECC71;padding:1%;border:5;box-shadow:10px -10px 10px -10px black inset;border: 1px solid #ddd;border-radius: 4px;padding: 4%">
                    <b><p style="position:absolute;border: 1px solid black;">D4-TRPL</p></b> 
                    <a href="#"></a><img src="../image/ctff.png" class="img-circle" alt="Gambar malas ngoding" width="45%" height="236" style="display: block; margin: auto;"></a>
                </div>
            </div>
        </div></div>
        <?php } ?>

        
    
</div>
 
@endsection