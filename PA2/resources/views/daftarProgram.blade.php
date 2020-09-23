
@extends('master') 
 
 
@section('konten')
<script>


var hapus = ()=>
$(document).ready(function(){
    var r = confirm("Yakin ingin menghapus data ini??");
    if (r === false) {
           alert("Batal menghapus data");
        }else{
            var mTahun  = document.getElementById("tahun").value;
            var  mMata_anggaran = document.getElementById("mata_anggaran").value;
            window.location.href = ('DELETE',"/programKegiatan/delete/"+mMata_anggaran+"/"+mTahun);
                    }

        
});

function hapus(){
   
                         
}

</script>


 <div class="container-fluid tableProgram">
 <div class="col-md-12"><center><h2>Anggarann  Program Tahun <?php echo $tahun ?></h2></center></div>
 
 <div class="col-md-12 row" style="margin-top:40px">
<?php foreach($visi as $vm){ ?>
 <div class="col-md-1"><b>Visi : </b></div>
<div class="col-md-11">{{$vm->visi}}</div>
<div class="col-md-1"><b>Misi : </b></div>
<div class="col-md-11">{{$vm->misi}}</div>
<?php } ?>
 </div>
        <form method="post" action="{{route('cariProgram')}}">
        @csrf
        <div class="col-md-12 form-tambah row">
        <?php if(session()->get('role')=="KA"){ ?>
        <!-- <div class="col-md-8"><input type="button" class="btn-tema" value="Revisi"></div> -->
        <div class="col-md-8"></div>
        <?php } ?>
        <?php if(session()->get('role')=="Mahasiswa"){ ?>
            <div class="col-md-8"></div>
        <?php } ?>

            <input type="hidden" name="tahun" value="<?php echo $tahun ?>">
                <div class="col-md-2"><input type="text" name="cari" placeholder="Masukkan Mata Anggaran" class="form-control">
                </div>
                <div class="col-md-2">
                <input type="submit" class="btn-tema2" value="Cari">
                </div>
            
        </div>
        </div>
        </form>
        <?php $x=1; ?>
    <div class="col-md-12 ">
        <table border="1" class="tableDaftarProgram">
            <th width="1%">No</th>
            <th width="3%">Mata Anggaran</th>
            <th width="5%">Nama Program dan Kegiatan</th>
            <th width="3%">Tujuan Kegiatan</th>
            <?php if(session()->get('role')=="KA"){ ?>
        
            <?php }?>
            <?php if(session()->get('role')=="Mahasiswa"){ ?>
           
            <?php } ?>
            <th width="8%">Sasaran Kegiatan/Peserta Kegiatan</th>
            <th width="2%">Tanggal Pelaksanaan</th>
            <th width="2%">Vol</th>
            <th width="5%">Satuan</th>
            <th width="5%">Harga Satuan (1000 rupiah)</th>
            <th width="5%">Jumlah(10000)</th>
            <?php if(session()->get('role')=="KA"){ ?>
                <th width="5%">Aksi</th>
            <?php } ?>
        
            
            <?php foreach($program as $p){ ?>
              
                <tr>
                    <td class="no"><?php echo $x ?></td>
                    <td><?php echo $p->mata_anggaran ?></td>
                    <td><?php echo $p->nama_progaram ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                <?php $x++ ?>
               
                    <td><?php echo $p->jumlah ?></td>
                    <?php if(session()->get('role')=="KA"){ ?>
                    <td>
                    <div class="col">
                        <div class="col-md-6">
                        <!-- {{url('/programKegiatan/daftarProgram/'.$p->tahun)}} -->
                            <a href="{{url('/programKegiatan/edit/'.$p->mata_anggaran)}}"><input type="button" class="btn-act" value="Edit"></a>                                     
                        </div>
                        <div class="col-md-6">
                        <from name="ffrom">
                            <input type="hidden" value="<?php echo $p->mata_anggaran ?>" id="mata_anggaran" name="mata_anggaran">
                            <input type="hidden" value="<?php echo $p->tahun ?>" name="tahun" id="tahun">
                           <input type="button" class="btn-act" onclick="hapus()" id="hapus" name="hapus" value="Hapus">         
                        </from>
                        </div>
                    </div>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                    
                        <table class="table2">
                            <tr>        
                                            
                                    <td>
                                        <table>
                                        <?php foreach($perencanaan as $per){
                                            if($per->mata_anggaran == $p->mata_anggaran){
                                                ?>  
                                            <tr>
                                            <td class="id"><?php echo $per->code_mata_anggaran?></td> 
                                                <td><?php echo $per->nama_program ?></td>
                                            </tr>
                                            
                                            
                                            <?php }
                                             } ?>
                                        </table>
                                    </td>    
                           

                            </tr>
                        </table>
                    </td>
                    <td>
                    <table class="table2">
                            <tr>                        
                                    <td>
                                        <table>
                                        <?php foreach($perencanaan as $per){
                                            if($per->mata_anggaran == $p->mata_anggaran){
                                                ?>  
                                            <tr>
                                              <td><?php echo $per->tujuan_kegiatan ?></td>
                                            </tr>
                                            <?php }
                                             } ?>
                                        </table>
                                    </td>    
                            </tr>
                        </table>
                    </td>
                
                    <td>
                    <table class="table2">
                            <tr>                        
                                    <td>
                                        <table>
                                        <?php foreach($perencanaan as $per){
                                            if($per->mata_anggaran == $p->mata_anggaran){
                                                ?>  
                                            <tr>
                                              <td><?php echo $per->peserta_kegiatan ?></td>
                                            </tr>
                                            <?php }
                                             } ?>
                                        </table>
                                    </td>    
                            </tr>
                        </table>
                    </td>
                    <td>
                    <table class="table2">
                            <tr>                        
                                    <td>
                                        <table>
                                        <?php foreach($perencanaan as $per){
                                            if($per->mata_anggaran == $p->mata_anggaran){
                                                ?>  
                                            <tr>
                                              <td><?php echo $per->waktu_pelaksanaan     ?></td>
                                            </tr>
                                            <?php }
                                             } ?>
                                        </table>
                                    </td>    
                            </tr>
                        </table>
                    </td>
                    <td>
                    <table class="table2">
                            <tr>                        
                                    <td>
                                        <table>
                                        <?php foreach($perencanaan as $per){
                                            if($per->mata_anggaran == $p->mata_anggaran){
                                                ?>  
                                            <tr>
                                              <td><?php echo $per->vol ?></td>
                                            </tr>
                                            <?php }
                                             } ?>
                                        </table>
                                    </td>    
                            </tr>
                        </table>
                    </td>
                    <td>
                    <table class="table2">
                            <tr>                        
                                    <td>
                                        <table>
                                        <?php foreach($perencanaan as $per){
                                            if($per->mata_anggaran == $p->mata_anggaran){
                                                ?>  
                                            <tr>
                                              <td><?php echo $per->satuan ?></td>
                                            </tr>
                                            <?php }
                                             } ?>
                                        </table>
                                    </td>    
                            </tr>
                        </table>
                    </td>
                    <td>
                    <table class="table2">
                            <tr>                        
                                    <td>
                                        <table>
                                        <?php foreach($perencanaan as $per){
                                            if($per->mata_anggaran == $p->mata_anggaran){
                                                ?>  
                                            <tr>
                                              <td><?php echo $per->harga_satuan ?></td>
                                            </tr>
                                            <?php }
                                             } ?>
                                        </table>
                                    </td>    
                            </tr>
                        </table>
                    </td>
                    <td>
                    <table class="table2">
                            <tr>                        
                                    <td>
                                        <table>
                                        <?php foreach($perencanaan as $per){
                                            if($per->mata_anggaran == $p->mata_anggaran){
                                                ?>  
                                            <tr>
                                              <td><?php echo $per->dana ?></td>
                                            </tr>
                                            <?php }
                                             } ?>
                                        </table>
                                    </td>    
                            </tr>
                        </table>
                    </td>
     
                    <?php if(session()->get('role')=="KA"){ ?>
                    <td></td> 
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </div>
 </div>


@endsection