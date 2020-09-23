@extends('master') 
 
 
@section('konten')
 
 <div class="container-fluid tableProgram">
 <div class="col-md-12"><center><h2>Realisasi Program Tahun 2020</h2></center></div>
        <div class="col-md-12 form-tambah row">
        <div class="col-md-8"></div>
            <div class="col-md-2"><input type="text" placeholder="Cari" class="form-control"></div>
            <div class="col-md-2">
               <input type="button"  class="btn-tema2" value="Cari">
            </div>
        </div>
    <div class="col-md-12 ">
        <table border="1" class="tableDaftarProgram">
            <th width="1%">No</th>
            <th width="3%">Kode</th>
            <th width="22%">Nama Kegiatan</th>
            <th width="5%">Pagu</th>
            <th width="3%">Realisasi</th>
            <th width="6%">Sisa</th>
            <th width="2%">Persentase</th>
            <th width="2%">Verifikasi</th>
            <th width="2%">Dibayarakan</th>
            <th width="2%">Acc</th>
            
            <?php for($i=1;$i<6;$i++){ ?>
              <tr>
                 <td><?php echo $i ?></td>
                 <td>II.3.15</td>
                 <td>Kegiatan HIMAPRO(Welcoming Party Angkatan 2019)</td>
                 <td>Rp 1.000.000</td>
                 <td>Rp 900.000</td>
                 <td>Rp 100.000</td>
                 <td>90%</td>
                 <td>Sudah</td>
                 <td>Sudah</td>
                 <td>Sudah</td>
              </tr>
            <?php } ?>
        </table>
    </div>
 </div>


@endsection