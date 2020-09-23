@extends('master') 
 
@section('konten')
<script>
// var tambahData = ()=>
// $(document).ready(function(){
//         $(".npk-baru").show(800);
// });
// var hapus = ()=>
// $(document).ready(function(){
//         $("#i").hide();
//         $("#ic").hide();
// });

// var kirim = ()=>
// $(document).ready(function(){
//     var r = confirm("Yakin ingin mengirim data??");
//     if (r === false) {
//            alert("Batal mengirim data");
//         }else{
//             alert("Data sukses dikirim silahkan tunggu proses selanjutnya");
//             window.location.href = "/home"
//         }
// });

$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="col-md-6 menu"><input type="text" class="input-text2" name="namaKegiatan[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
    var wrapper2 = $('.field_wrapper2'); //Input field wrapper
    var wrapper3 = $('.field_wrapper3');
    var wrapper4 = $('.field_wrapper4');
    var wrapper5 = $('.field_wrapper5');
    var wrapper6 = $('.field_wrapper6');
    var wrapper7 = $('.field_wrapper7');
    var wrapper8 = $('.field_wrapper8');
    var wrapper9 = $('.field_wrapper9');
    var wrapper10 = $('.field_wrapper10');
    var fieldHTML2 = '<div class="col-md-6 menu"><input type="text" placeholder="Tujuan Kegiatan" class="input-text2" name="tujuan[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
    var fieldHTML3 = '<div class="col-md-6 menu"><input type="text" class="input-text2" name="pesertaKegiatan[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
    var fieldHTML4 = '<div class="col-md-6 menu"><input type="text" class="input-text2" name="vol[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
    var fieldHTML5 = '<div class="col-md-6 menu"><input type="text" class="input-text2" name="satuan[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
    var fieldHTML6 = '<div class="col-md-6 menu"><input type="text" class="input-text2" name="harga[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
    var fieldHTML8 = '<div class="col-md-6 menu"><input type="text" class="input-text2" name="sumberDana[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
    var fieldHTML7 = '<div class="col-md-6 menu"><input type="text" class="input-text2" name="dana[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
    var fieldHTML9 = '<div class="col-md-6 menu"><input type="text" class="input-text2" name="pelaksana[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
    var fieldHTML10 = '<div class="col-md-6 menu"><input type="date" class="input-text2" name="tanggal[]" value=""/> <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></div>'; //New input field html 
  
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
            $(wrapper2).append(fieldHTML2);
            $(wrapper3).append(fieldHTML3);
            $(wrapper4).append(fieldHTML4);
            $(wrapper5).append(fieldHTML5);
            $(wrapper6).append(fieldHTML6);
            $(wrapper7).append(fieldHTML7);
            $(wrapper8).append(fieldHTML8);
            $(wrapper9).append(fieldHTML9);
            $(wrapper10).append(fieldHTML10);

        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('.menu').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

function next(){

   if(document.fform.mata_anggaran.value == ""){
        alert("Mata anggaran tidak boleh kosong");
   }else if(document.fform.nama_program.value == ""){
        alert("Nama program tidak boleh kosong");
    }else{
    $(".add").show(800);

    $(".add1").hide();


    var mAnggaran  = (document.fform.mata_anggaran.value);
    var  mNamaProgram = (document.fform.nama_program.value);
    var  mTahun = (document.fform.tahun.value);
    document.ffrom2.tahun.value = mTahun;
    document.ffrom2.mata_anggaran.value = mAnggaran;
    document.ffrom2.nama_program.value = mNamaProgram;
   }
    // document.ffrom2.program[0].value = "asdsa";
    // document.ffrom2.elements["program[]"].value = "Ii1";
    // document.ffrom2.standar.value = mAnggaran;
}
</script>

<div class="container">
<center><h2>Tambah Data Program</h2></center>
<hr>

            <form name="fform" class="add1">
            <div class="row">
                    <div class="col-md-12 edit-program">
                    <div class="col-md-12 row in">
                            <div class="col-md-4 p"><p>Tahun</p></div>
                            <?php
                                 $tanggal=getdate();
                                 $tanggal2 = $tanggal['year']+1;
                            ?>
                            <div class="col-md-8"><input type="text" requirer="required" placeholder="Masukkan data baru" class="input-text" disabled value="<?php echo $tanggal['year'].'/'.$tanggal2;?>" name="tahun" id=""></div>
                        </div> 
                        <div class="col-md-12 row in">
                            <div class="col-md-4 p"><p>Mata Anggaran</p></div>
                            <div class="col-md-8"><input type="text" requirer="required" placeholder="Masukkan data baru" class="input-text"  name="mata_anggaran" id=""></div>
                        </div>  
                            <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p>Nama Program</p></div>
                                <div class="col-md-8"><input type="text" placeholder="Masukkan data baru" class="input-text" name="nama_program" id=""></div>
                                
                            </div> 
                            <div class="col-md-12 row">
                                <div class="col-md-10"></div>
                                <div class="col-md-2 bt"><input type="button" class="btn-tema2" onclick="next()" value="Selanjutnya" name="" id=""></div>
                            </div>
                    </div>
                    </div> 
            </form>


            <form action="{{route('storeProgram')}}" name="ffrom2" class="test15 add" method="POST">

            {{ csrf_field() }}
            <input type="hidden" name="mata_anggaran">
            <input type="hidden" name="nama_program">
            <input type="hidden" name="tahun">
                <div class="row">
                    <div class="col-md-12 edit-program">
                            <div class="col-md-12 row in">
                            <div class="col-md-4 p"><p>NamaKegiatan</p></div>
                                <div class="col-md-8">
                                        <div class="row field_wrapper">
                                         <div class="col-md-6">
                                                <input type="text" class="input-text2" name="namaKegiatan[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button" title="Add field"><input type="button" id="ic" value="+"></a>
                                            </div>
                               
                                        </div>
                                </div>
                                <div class="col-md-6 npk-baru"><input type="text" placeholder="Masukkan data baru" class="input-text" placeholder="Masukkan data baru"></div>
                            </div>
                            <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p>Tujuan Kegiatan</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper2">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text2" name="tujuan[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                            </div> 
                            <!-- <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p>Target Luaran/Peserta Kegiatan</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text2" name="pelaksana[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                            </div>     -->
                            <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p> Sasaran Kegiatan/Peserta Kegiatan</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper3">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text2" name="pesertaKegiatan[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p> Rencana Waktu Peleksanaan</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper10">
                                            <div class="col-md-6">
                                                <input type="date" class="input-text2" name="tanggal[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p> Vol</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper4">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text2" name="vol[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                             </div>         
                            <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p> Sataun</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper5">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text2" name="satuan[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                            </div> 
                            <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p> Harga Satuan (1000 rupiah)</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper6">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text2" name="harga[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                            </div> 

                            <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p>Jumlah (1000 rupiah)</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper7">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text2" name="dana[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                             </div>
                        
                             <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p>Sumber Dana</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper8">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text2" name="sumberDana[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                             </div>

                             <div class="col-md-12 row in">
                                <div class="col-md-4 p"><p>Pelaksana</p></div>
                                <div class="col-md-8">
                                         <div class="row field_wrapper9">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text2" name="pelaksana[]" value=""/>
                                                <a href="javascript:void(0);" class="add_button btn-pls" title="Add field"><input type="button"  id="ic" value="+"></a>
                                            </div>                   
                                        </div>
                                </div>
                             </div>
                       
                    </div> 
                    <div class="col-md-12 row">
                        <div class="col-md-6"></div>    
                        <div class="col-md-4 bt"><input type="submit" class="btn-tema2" value="Tambahkan Perancanaan Lagi" name="action" id=""></div>
                        <div class="col-md-2 bt"><input type="submit" class="btn-tema2" value="Selesai" name="action" id=""></div>
                        <!-- <div class="col-md-2 bt"><input type="button" onclick="kirim()" class="btn-tema2" value="Kirim" name="" id=""></div> -->
                    </div>
                </div>
            </form>
</div>

</head>
<body>
@endsection