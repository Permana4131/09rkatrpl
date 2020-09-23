@extends('master') 
 
@section('konten')
<script>
$(document).ready(function(){
  $("cari").click(function(){
    $("p").toggle(1000);
  });
});

var cari = ()=>
$(document).ready(function(){
    var inCari = document.getElementById('inCari').value;
   if(inCari!=""){  
         $(".tambahProgram").hide(800);
        $(".test15").show(800);  
   }else{
        alert("Data Tidak Ditemukan");
   }
});

var tambahData = ()=>
$(document).ready(function(){
        $(".test15").hide(800);
        $(".tambahProgram").show(800);
});

</script>

<div class="container">
    <fieldset class="scheduler-border edit">
            <legend class="scheduler-border"><p>Daftar Program Kegiaan dan Anggaran D4TRPL</p></legend>
            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-3">
                        <input type="text" class="form-control" placeholder="Masukkan ID program" id="inCari">
                    </div>
                    <div class="col-lg-2">
                        <input type="button" id="button"  data-animation="fadeInUp" data-delay="700ms" class="btn-tema" onclick="cari()" value="Cari">
                    </div>
                    <div class="col-lg-6">
                        <input type="button" id="btn" class="btn-tema" onclick="tambahData()" value="Tambahkan Program Kegiatan">
                    </div>    
                </div>
            </form>
            <form action="" class="test15" method="post">
                <div class="row">
                    <div class="col-md-12 text">
                        <h3>Data dengan ID II ditemukan</h3>
                    </div>
                    <div class="col-md-12 row text">
                        <div class="col-md-3"><p><span class="fa fa-chevron-right"></span>Nama Porgram dan Kegiatan</p></div>
                        <div class="col-md-1"><p>:</p></div>
                        <div class="col-md-8"><p>test</p></div>
                    </div>
                    <div class="col-md-12 row text">
                        <div class="col-md-3"><p><span class="fa fa-chevron-right"></span>Tujuan Kegiatan</p></div>
                        <div class="col-md-1"><p>:</p></div>
                        <div class="col-md-8"><p>test</p></div>
                    </div>
                    <div class="col-md-12 row text">
                        <div class="col-md-3"><p><span class="fa fa-chevron-right"></span>Target Luaran/Indikator Capaian</p></div>
                        <div class="col-md-1"><p>:</p></div>
                        <div class="col-md-8"><p>test</p></div>
                    </div>
                    <div class="col-md-12 row text">
                        <div class="col-md-3"><p><span class="fa fa-chevron-right"></span>Sasaran Kegiatan/Peserta</p></div>
                        <div class="col-md-1"><p>:</p></div>
                        <div class="col-md-8"><p>test</p></div>
                    </div>
                    <div class="col-md-12 row text">
                        <div class="col-md-3"><p><span class="fa fa-chevron-right"></span>Vol</p></div>
                        <div class="col-md-1"><p>:</p></div>
                        <div class="col-md-8"><p>test</p></div>
                    </div>
                    <div class="col-md-12 row text">
                        <div class="col-md-3"><p><span class="fa fa-chevron-right"></span>Satuan</p></div>
                        <div class="col-md-1"><p>:</p></div>
                        <div class="col-md-8"><p>test</p></div>
                    </div>
                </div>

                <div class="col-md-12 row" style="padding:2%;">
                    <div class="col-md-3"></div> 
                    <div class="col-md-3">
                        <input type="button" class="btn-tema" value="Tambahkan Dana" >
                    </div>
                    <div class="col-md-3">
                        <input type="button"  class="btn-tema" value="Edit">
                    </div>
                    <div class="col-md-3">
                        <input type="button"  class="btn-tema" value="Hapus">
                    </div>                   
                </div>
            </form>

            <form action="" method="post" class="tambahProgram">
                <div class="row">
                        <div class="col-md-12 form-tambah row">
                            <div class="col-md-3"><p> Nama Porgram dan Kegiatan    :</p></div>
                            <div class="col-md-8"><input type="text" placeholder="Nama Program Kegiatan" class="form-control"></div>
                        </div>
                        <div class="col-md-12 form-tambah row">
                            <div class="col-md-3"><p> Nama Porgram dan Kegiatan    :</p></div>
                            <div class="col-md-8"><input type="text" placeholder="Nama Program Kegiatan" class="form-control"></div>
                        </div>
                        <div class="col-md-12 form-tambah row">
                            <div class="col-md-3"><p> Nama Porgram dan Kegiatan    :</p></div>
                            <div class="col-md-8"><input type="text" placeholder="Nama Program Kegiatan" class="form-control"></div>
                        </div>
                        <div class="col-md-12 form-tambah row">
                            <div class="col-md-3"><p> Nama Porgram dan Kegiatan    :</p></div>
                            <div class="col-md-8"><input type="text" placeholder="Nama Program Kegiatan" class="form-control"></div>
                        </div>
                        <div class="col-md-12 form-tambah row">
                            <div class="col-md-3"><p> Nama Porgram dan Kegiatan    :</p></div>
                            <div class="col-md-8"><input type="text" placeholder="Nama Program Kegiatan" class="form-control"></div>
                        </div>
                        <div class="col-md-12 form-tambah row">
                            <div class="col-md-3"><p> Nama Porgram dan Kegiatan    :</p></div>
                            <div class="col-md-8"><input type="text" placeholder="Nama Program Kegiatan" class="form-control"></div>
                        </div>
                    
                </div>
            </form>
    </fieldset>
</div>

</head>
<body>
@endsection