@extends('master') 
 
@section('konten')
<script>

$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="col-md-6 menu"><input type="text" class="input-text2" name="namaKegiatan[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
   
     var a = '<tr> <td><input type="text" name="keterangan[]" class="input-text" placeholder="Ketik disini.."></td><td><input type="int" name="jumlah[]" class="input-text" placeholder="Ketik disini.."></td> <td><input type="int" name="sisa[]" class="input-text" placeholder="Ketik disini.."></td><td><input type="text" name="kodeBudget[]" class="input-text" placeholder="Ketik disini.."></td><td><a href="javascript:void(0);" class="add_button" title="Add field"><input type="button" id="ic" value="+"></a></td></tr>'
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(a); //Add field html
            
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('.menu').remove(); //Remove field html
        x--; //Decrement field counter
    });
});


$(document).ready(function(){
  $("cari").click(function(){
    $("p").toggle(1000);
  });
});

var daftarKegiatan = ()=>
$(document).ready(function(){
        $(".request-kegiatan").hide(800);
        $(".test15").show(800);  

});

var tambahData = ()=>
$(document).ready(function(){
        $(".test15").hide(800);
        $(".request-kegiatan").show(800);
});

var kirim = ()=>
$(document).ready(function(){
    var r = confirm("Yakin ingin mengirim Permohonan??");
    if (r === false) {
           alert("Batal mengirim Permohonan");
        }else{
            alert("Permohonan sukses dikirim silahkan tunggu proses selanjutnya");
            window.location.href = "/home"
        }
});



</script>

<div class="container">
<h4>Tambah Program</h4>
<hr>
    <form action="" method="post" class="form-tambah">
              <div class="row">
                    <div class="col-lg-12">
                        <input type="button" id="btn" class="btn-tema" onclick="tambahData()" value="Tambahkan Program Kegiatan">
                        <input type="button" id="btn" class="btn-tema" onclick="daftarKegiatan()" value="Lihat daftar kegiatan">
                    </div>    
                </div>
            </form>
            <form action="" class="test15" method="post">
                <div class="row">
                    <div class="col-md-12 text">
                        <h3>Program Sebelumnya</h3>
                    </div>
                    <div class="col-md-12">
                    <table class="table-request">
                        <th width="2%">No</th>
                        <th width="20%">Status Persetujuan</th>
                        <th width="20%">Oleh</th>
                        <th width="18">Dana</th>
                        <th width="2%">Aksi</th>
                        <?php $i = 1?>
                        <?php foreach($permohonan as $p){ ?>
                            <tr>
                                <td>
                                    <p><?php echo $i ?></p>
                                </td>
                                <td>
                                    <p><?php echo $p->status ?></p>
                                </td>
                                <td>
                                    <p><?php echo $p->disetujui ?></p>
                                </td>
                                <td><?php echo $p->nominal?></td>
                                <td>
                                <nav id="sticker" class="navbar navbar-expand-lg">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fa fa-wrench">tools</span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Lihat</a>
                                        <a class="dropdown-item" href="#">Cetak</a>                
                                        </li>
                                    </ul>
                                </nav>
                        </div>
                                </td>
                            </tr>
                        <?php $i++; 
                    } ?>
                    </table>
                    </div>
                </div>
            </form>

            <form action="{{route('requestKegiatan1')}}"  class="request-kegiatan" method="post">
            @csrf
            <input type="hidden" name="pengirim" value="<?php echo session()->get('username') ?>">
            <input type="hidden" name="nominal" value="Rp 1.000.000 - Rp 10.000.000">
      
                <div class="row">
                    <div class="col-md-12 edit-program">
                            <div class="col-md-12 row req">
                               <div class="col-md-4"><p>Tahun Anggaran</p></div>
                               <div class="col-md-2">
                                   <select name="tahun" id="" class="input-text">
                                       <option value="2019">2019</option>
                                       <option value="2020">2020</option>
                                   </select>
                               </div>
                               <div class="col-md-6"> </div>
                            </div>
                            <div class="col-md-12 row req">
                                <div class="col-md-4"> <p>Tanggal</p></div>
                                <div class="col-md-8">
                                    <input class="input-date" name="tanggal" type="date">
                                </div>
                            </div>
                            <div class="col-md-12 row req">
                                <div class="col-md-4"> <p>Unit</p></div>
                                <div class="col-md-8"><input type="text" name="unit" class="input-text"></div>
                            </div>
                            <div class="col-md-12 row req">                    
                                <div class="col-md-4"><p>Nominal</p></div>
                                <div class="col-md-8"><p>Rp 1.000.000 - Rp 10.000.000</p></div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                               <table border="1"  class="field_wrapper">
                                   <th width="40%">Keterangan</th>
                                   <th width="28%">Jumlah</th>
                                   <th width="19%">Sisa</th>
                                   <th width="17%">Kode Budget</th>
                                   <th>Aksi</th>
                                
                                   <tr>
                                       <td><input type="text" name="keterangan[]" class="input-text" placeholder="Ketik disini.."></td>
                                       <td><input type="int" name="jumlah[]" class="input-text" placeholder="Ketik disini.."></td>
                                       <td><input type="int" name="sisa[]" class="input-text" placeholder="Ketik disini.."></td>
                                       <td><input type="text" name="kodeBudget[]" class="input-text" placeholder="Ketik disini.."></td>
                                        <td>
                                            <a href="javascript:void(0);" class="add_button" title="Add field"><input type="button" id="ic" value="+"></a>
                                        </td>
                                   </tr>
                               
                               </table>
                            </div>     
                    </div> 
                    <div class="col-md-12 row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2 bt"><input type="submit" class="btn-tema2" value="Kirim" name="" id=""></div>
                    </div>
                </div>
            </form>
                                   </div>

@endsection