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

<div class="container">
<h4>Edit Program</h4>
<hr>
            <form action="{{route('simpanEditProgram')}}" class="test15" method="post">
            @csrf
                <div class="row">
                    <div class="col-md-12 text">
                        <h3>Data Program</h3>
                    </div>
                    <div class="col-md-12 edit-program">
                    <?php foreach($program as $p){ ?>
                        <input type="hidden" name="tahun" value=<?php echo $p->tahun ?>>
                      
                                <div class="col-md-8"><input type="hidden"  class="input-text" value="<?php echo $p->mata_anggaran?>" name="mata_anggaran" id=""></div>
                    
                            <div class="col-md-12 row in">
                                <div class="col-md-4"><p>Nama Program</p></div>
                                <div class="col-md-8"><input type="text" class="input-text" value="<?php echo $p->nama_progaram ?>" name="nama_program" id=""></div>
                                
                            </div> 
                            <div class="col-md-12 row in">
                                <!-- <div class="col-md-4"><p style="margin-top:20px">Kode Mata Anggaran</p></div> -->
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                               <div class="col-md-6">
                                                    <input type="hidden" name="kode_mata_anggaran[]" class="input-text2" id="i"  value="<?php echo $per->code_mata_anggaran ?>" >
                                                </div>
                                                <!-- <div class="col-md-1">
                                                    <input type="button" class="icon-times " id="ic" value="x" onclick="hapus()">
                                               </div> -->
                                            <?php } ?>
                                        </div>
                                </div>
                          </div>  
                            <div class="col-md-12 row in">
                                <div class="col-md-4"><p style="margin-top:20px">Nama Kegiatan</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                               <div class="col-md-6">
                                                    <input type="text" name="namaKegiatan[]" class="input-text2" id="i" value="<?php echo $per->nama_program ?>">
                                                </div>
                                                <!-- <div class="col-md-1">
                                                    <input type="button" class="icon-times " id="ic" value="x" onclick="hapus()">
                                               </div> -->
                                            <?php } ?>
                                        </div>
                                </div>
                          </div>
                            <div class="col-md-12 row in">
                                <div class="col-md-4"><p>Tujuan Kegiatan</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                                <div class="col-md-6">
                                                    <input type="text" name="tujuan[]" class="input-text2" id="i" value="<?php echo $per->tujuan_kegiatan ?>" class="input text">
                                                    <!-- <a href="javascript:void(0);" class="remove_button"><input type="button" class="" id="ic" value="x"></a> -->
                                                </div>
                                                <!-- <div class="col-md-1">
                                                    <input type="button" class="icon-times " id="ic" value="x" onclick="hapus()">
                                               </div> -->
                                            <?php } ?>
                                        </div>
                                </div>
                            </div>    
                            <div class="col-md-12 row in">
                                <div class="col-md-4"><p> Sasaran Kegiatan/Peserta Kegiatan</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                                <div class="col-md-6">
                                                    <input type="text" name="pesertaKegiatan[]" class="input-text2" id="i" value="<?php echo $per->peserta_kegiatan ?>" class="input text">
                                                </div>
                                                <!-- <div class="col-md-1">
                                                    <input type="button" class="icon-times " id="ic" value="x" onclick="hapus()">
                                               </div> -->
                                            <?php } ?>
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-12 row in">
                                <div class="col-md-4"><p>Rencana Waktu Peleksanaan</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                                <div class="col-md-6">
                                                    <input type="date" name="tanggal[]" class="input-text2" id="i" value="<?php echo $per->waktu_pelaksanaan ?>" class="input text">
                                                </div>
                                                <!-- <div class="col-md-1">
                                                    <input type="button" class="icon-times " id="ic" value="x" onclick="hapus()">
                                              \ </div> -->
                                            <?php } ?>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-12 row in">
                                <div class="col-md-4"><p> Vol</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                                <div class="col-md-6">
                                                    <input type="number" name="vol[]" class="input-text2" id="i" value="<?php echo $per->vol ?>" class="input text">
                                                </div>
                                          
                                            <?php } ?>
                                        </div>
                                </div>
                             </div>         
                            <div class="col-md-12 row in">
                                <div class="col-md-4"><p> Sataun</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                                <div class="col-md-6">
                                                    <input type="text" name="satuan[]" class="input-text2" id="i" value="<?php echo $per->satuan ?>" class="input text">
                                                </div>
                                            
                                            <?php } ?>
                                        </div>
                                </div>
                            </div> 
                            <div class="col-md-12 row in">
                                <div class="col-md-4"><p> Harga Satuan (1000 rupiah)</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                                <div class="col-md-6">
                                                    <input type="number" name="harga[]" class="input-text2" id="i" value="<?php echo $per->dana ?>" class="input text">
                                                </div>
                                            
                                            <?php } ?>
                                        </div>
                                </div>
                           </div> 
                             <div class="col-md-12 row in">
                                <div class="col-md-4"><p> Jumlah(10000)</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                                <div class="col-md-6">
                                                    <input type="number" name="dana[]" class="input-text2" id="i" value="<?php echo $per->dana ?>" class="input text">
                                                </div>
                                                <!-- <div class="col-md-1">
                                                    <input type="button" class="icon-times " id="ic" value="x" onclick="hapus()">
                                               </div> -->
                                            <?php } ?>
                                        </div>
                                </div>
                           </div>
                           <div class="col-md-12 row in">
                                <div class="col-md-4"><p> Sumber Dana</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                                <div class="col-md-6">
                                                    <input type="text" name="sumberDana[]" class="input-text2" id="i" value="<?php echo $per->sumber_dana ?>" class="input text">
                                                </div>
                                                <!-- <div class="col-md-1">
                                                    <input type="button" class="icon-times " id="ic" value="x" onclick="hapus()">
                                              </div> -->
                                            <?php } ?>
                                        </div>
                                </div>
                           </div>

                           <div class="col-md-12 row in">
                                <div class="col-md-4"><p> Pelaksana</p></div>
                                <div class="col-md-8">
                                        <div class="row">
                                        <?php foreach($perencanaan as $per){ ?>
                                                <div class="col-md-6">
                                                    <input type="text" name="pelaksana[]" class="input-text2" id="i" value="<?php echo $per->pelaksana ?>" class="input text">
                                                </div>
                                                <!-- <div class="col-md-1">
                                                    <input type="button" class="icon-times " id="ic" value="x" onclick="hapus()">
                                               </div> -->
                                            <?php } ?>
                                        </div>
                                </div>
                           </div>
                        <?php } ?>
                    </div> 
                    <div class="col-md-12 row">
                        <div class="col-md-8"></div>
                        <div class="col-md-2 bt"><input type="submit" class="btn-tema2" value="Batal" name="action" id=""></div>
                        <div class="col-md-2 bt"><input type="submit" class="btn-tema2" value="Simpan" name="action" id=""></div>
                    </div>
                </div>
            </form>
</div>

</head>
<body>
@endsection