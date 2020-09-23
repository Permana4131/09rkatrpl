@extends('master') 
 
@section('konten')
<script>
var tambahData = ()=>
$(document).ready(function(){
        $(".npk-baru").show(800);
});
var hapus = ()=>
$(document).ready(function(){
        $("#i").hide();
        $("#ic").hide();
});
</script>

<div class="container-fluid">
<center><h4>Lporan Dana</h4></center>
<hr>
            <form action="" class="kwitansi" method="">
                <div class="row">
                    <div class="col-md-12 edit-program">
                            <hr>
                            <div class="col-md-12">
                                <center>
                               <table border="1">
                                   <tr>
                                       <td class="no">1.Realisasi : </td>
                                       <td width="91%"><input type="text" class="input-text" placeholder="Ketik disini.."></td>
                                   </tr>
                                   <tr>
                                       <td class="no">2.Sisa Dana : </td>
                                       <td width="91%"><input type="text" class="input-text" placeholder="Ketik disini.."></td>
                                   </tr>
                                   <tr>
                                       <td class="no">3.Tanggal : </td>
                                       <td width="91%"><input class="input-date" type="date"></td>
                                   </tr>
                               </table>
                               </center>
                            </div>     
                    </div> 
                    <div class="col-md-12 row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2 bt"><input type="button" class="btn-tema2" value="Kirim" name="" id=""></div>
                    </div>
                </div>
            </form>
</div>

</head>
<body>
@endsection