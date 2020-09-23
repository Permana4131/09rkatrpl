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
<center>
    <h4>Usulan Rencana Kegiatan dan Anggaran Tahun 2020</h4>
    <i><h8>Program Studi : Diploma 4 Teknologi Rekayasa Perangkat Lunak</h8></i>
</center>
<hr>
            <form action="{{route('tambahProgram2')}}" method="post" class="">
            {{ csrf_field() }}
                           <?php
                                 $tanggal=getdate();
                                 $tanggal2 = $tanggal['year']+1;
                            ?>
                            <input type="hidden" name="tahun" value="<?php echo $tanggal['year'].'/'.$tanggal2; ?>">
                <div class="row">
                        <div class="col-md-12 form-tambah row">
                            <div class="col-md-12"><center><b><p> Visi </p></b></center></div>
                            <div class="col-md-12"><textarea name="visi" id=""class="form-control" placeholder="Ketik disini.." cols="30" rows="10"></textarea></div>
                        </div>
                        <div class="col-md-12 form-tambah row">
                            <div class="col-md-12"><center><b><p> Misi </p></b></center></div>
                            <div class="col-md-12"><textarea name="misi" id="" cols="30" rows="10" placeholder="Ketik disini.." class="form-control"></textarea></div>
                        </div> 
                        <div class="col-md-12 form-tambah row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2"><input type="submit" name=""  value="Selanjutanya" class="btn-tema" id=""></div>
                        </div>            
                </div>
            </form>
</div>

</head>
<body>
@endsection