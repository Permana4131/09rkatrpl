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
  
<div class="container">
<?php if(session()->get('role')=="KA"){ ?>
<div class="col-md-12"><a href="{{route('tambahProgram')}}"><input type="button" class="btn-tema2" value="Tambah Program" name="" id=""></a></div>
<?php } ?>   
<fieldset class="scheduler-border">
        <legend class="scheduler-border"><p>Daftar Program Kegiaan dan Anggaran D4TRPL</p></legend>
        <div class="container-fluid row program-content"> 

            <?php foreach($programKegiatan as $p){ ?>
            
            <a class="as" href="{{url('/programKegiatan/daftarProgram/'.$p->tahun)}}">
            <div class="col-md-12 programKegiatan">
            <div class="row"> 
                <div class="col-md-2 pk">
                    <p>{{ $p->tahun }}</p>
                </div>
                <div class="col-md-10">
                    <div class="row">
                    <div class="col-md-5"><p>Jumlah Program Kegiatan :</p></div>
                    <div class="col-md-3"><p>{{ $p->jumlah_program }}</p></div> 
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row">
                    <div class="col-md-5"><p>Dana Terpakai</p></div>
                    <div class="col-md-3"><p>Rp. {{ $p->terpakai }}</p></div> 
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row">
                    <div class="col-md-5"><p>Sisa Dana</p></div>
                    <div class="col-md-3"><p>Rp. {{ $p->sisa }}</p></div> 
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                 <div class="col-md-8">
                    <div class="row">
                    <div class="col-md-5"><p>Total Dana</p></div>
                    <div class="col-md-3"><p>Rp. {{ $p->total }}</p></div> 
                    </div>
                </div>
                <div class="col-md-2"></div>      
            </div>
            </div>
            </a>
            <?php } ?>
        </div>
        <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-7">{{ $programKegiatan->links() }}</div>
        </div>
    </fieldset>
    <fieldset>
    
</div>
 
@endsection