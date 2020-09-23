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
        </div>
        <div class="col-md-12" style="padding:1%;"></div>

        <div class="row">
            <div class="col-md-12">
            <a href="{{route('tambahPrestasi')}}"><input type="button" class="btn-tema2" value="Tambah Prestasi" name="" id="" style="margin-left:1%;"></a>
            </div>
            
        </div>

        

        <div class="col-md-12" style="padding:1%;"></div>

        <div class="container-fluid row program-content"> 
            <!-- <a class="as" href="/programKegiatan/daftarProgram"> -->
            <div class="col-md-12 prestasi">
                <div class="row">
                    <div class="col-md-2" style="display: block; margin: auto;">
                        <img src="../image/icpc.png" style="width:100%;height:50%;display: block; margin: auto;border:5;box-shadow:0px 5px 5px 5px #8c8c8c inset;">
                    </div>

                    <div class="col-md-10" style="">
                        <div class="row">
                            <div class="col-md-10"></div>
                                <div class="col-md-2" style="background:#5499C7;text-align:center;display: block;">
                                    <p>3 hari yang lalu</p>
                                </div>
                        </div>
                    
                            <div class="col-md-12" style="text-align: center;">
                                <h2 style="color: darkorange;">Finalist ICPC 2019</h2>
                            </div>
                            <div class="col-md-12">
                                <hr style="height:5px;border:0;box-shadow:0 10px 10px -10px #8c8c8c inset;">
                            </div>
                        
                        <div class="col-md-12" style="text-align:justify;">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, architecto est esse assumenda magni delectus tenetur nulla animi sint dolore temporibus ipsam. At, blanditiis rerum. Rem, fuga. Commodi, qui consequatur.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint impedit veritatis at, dicta iusto iure odio magni consectetur, ratione aliquam praesentium, sunt vitae fugit debitis harum inventore quo modi rerum?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam placeat aliquam odit nulla sit, saepe ab excepturi omnis natus quasi dicta cum beatae iste architecto ullam maiores atque nam reprehenderit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit autem provident accusamus in, voluptatem aperiam eum, recusandae minus praesentium porro illo modi, assumenda aliquam laborum libero eveniet maxime itaque sequi!
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                                <div class="col-md-2" style="text-align:center;display: block;">
                                    <a href="/prestasi/prestasiSelanjutnya"><i>Baca selengkapnya....</i></a>
                                </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-2" style="background:blue;">
                        <p>Belum di Revisi</p>
                    </div> -->
                    </div>
                </div>
        </div>

        <div class="col-md-12" style="padding:1%;"></div>

        <div class="container-fluid row program-content"> 
            <!-- <a class="as" href="/programKegiatan/daftarProgram"> -->
            <div class="col-md-12 prestasi">
                <div class="row">
                    <div class="col-md-2" style="display: block; margin: auto;">
                        <img src="../image/unnamed.png" style="width:100%;height:50%;display: block; margin: auto;border:5;box-shadow:0px 5px 5px 5px #8c8c8c inset;">
                    </div>

                    <div class="col-md-10" style="">
                        <div class="row">
                            <div class="col-md-10"></div>
                                <div class="col-md-2" style="background:#5499C7;text-align:center;display: block;">
                                    <p>4 hari yang lalu</p>
                                </div>
                        </div>
                    
                            <div class="col-md-12" style="text-align: center;">
                                <h2 style="color: darkorange;">Finalist GIMASTIC 2019</h2>
                            </div>
                            <div class="col-md-12">
                                <hr style="height:5px;border:0;box-shadow:0 10px 10px -10px #8c8c8c inset;">
                            </div>
                        
                        <div class="col-md-12" style="text-align:justify;">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, architecto est esse assumenda magni delectus tenetur nulla animi sint dolore temporibus ipsam. At, blanditiis rerum. Rem, fuga. Commodi, qui consequatur.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint impedit veritatis at, dicta iusto iure odio magni consectetur, ratione aliquam praesentium, sunt vitae fugit debitis harum inventore quo modi rerum?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam placeat aliquam odit nulla sit, saepe ab excepturi omnis natus quasi dicta cum beatae iste architecto ullam maiores atque nam reprehenderit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit autem provident accusamus in, voluptatem aperiam eum, recusandae minus praesentium porro illo modi, assumenda aliquam laborum libero eveniet maxime itaque sequi!
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                                <div class="col-md-2" style="text-align:center;display: block;">
                                    <a href=""><i>Baca selengkapnya....</i></a>
                                </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-2" style="background:blue;">
                        <p>Belum di Revisi</p>
                    </div> -->
                    </div>
                </div>
        </div>

        <div class="col-md-12" style="padding:1%;"></div>

        <div class="container-fluid row program-content"> 
            <!-- <a class="as" href="/programKegiatan/daftarProgram"> -->
            <div class="col-md-12 prestasi">
                <div class="row">
                    <div class="col-md-2" style="display: block; margin: auto;">
                        <img src="../image/ctff.png" style="width:100%;height:50%;display: block; margin: auto;border:5;box-shadow:0px 5px 5px 5px #8c8c8c inset;">
                    </div>

                    <div class="col-md-10" style="">
                        <div class="row">
                            <div class="col-md-10"></div>
                                <div class="col-md-2" style="background:#5499C7;text-align:center;display: block;">
                                    <p>5 hari sebelumnya</p>
                                </div>
                        </div>
                    
                            <div class="col-md-12" style="text-align: center;">
                                <h2 style="color: darkorange;">Finalist CTF 2019</h2>
                            </div>
                            <div class="col-md-12">
                                <hr style="height:5px;border:0;box-shadow:0 10px 10px -10px #8c8c8c inset;">
                            </div>
                        
                        <div class="col-md-12" style="text-align:justify;">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, architecto est esse assumenda magni delectus tenetur nulla animi sint dolore temporibus ipsam. At, blanditiis rerum. Rem, fuga. Commodi, qui consequatur.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint impedit veritatis at, dicta iusto iure odio magni consectetur, ratione aliquam praesentium, sunt vitae fugit debitis harum inventore quo modi rerum?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam placeat aliquam odit nulla sit, saepe ab excepturi omnis natus quasi dicta cum beatae iste architecto ullam maiores atque nam reprehenderit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit autem provident accusamus in, voluptatem aperiam eum, recusandae minus praesentium porro illo modi, assumenda aliquam laborum libero eveniet maxime itaque sequi!
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                                <div class="col-md-2" style="text-align:center;display: block;">
                                    <a href=""><i>Baca selengkapnya....</i></a>
                                </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-2" style="background:blue;">
                        <p>Belum di Revisi</p>
                    </div> -->
                    </div>
                </div>
                
        </div>

        <div class="col-md-12" style="padding:1%;"></div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    
                </div>
                <div class="col-md-3">
                    <div class="pagination" style="float: right;">
                        <a href="#">&laquo;</a>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>
            </div>
        </div>

        
    
</div>
 
@endsection