@extends('master') 
 
@section('konten')  

                    <div class="container">
                    <div class="col-md-12">
                    <table class="tableDaftarProgram" border="1">
                        <th width="2%">No</th>
                        <th width="20%"><center>Oleh</center></th>
                        <th width="58"><center>Keterangan</center></th>
                        <th width="20"><center>Bukti</center></th>
                        <?php $i = 1?>
                        <?php foreach($laporan as $p){ ?>
                            <tr>
                                <td>
                                    <p><?php echo $i.'.' ?></p>
                                </td>
                                <td>
                                <center><p><?php echo $p->pengirim ?></p></center>
                                </td>
                                <td><?php echo $p->keterangan?></td>
                                <td><center><img src="{{url('/image/'.$p->foto)}}" alt=""></center></td>
                                
                            </tr>
                        <?php $i++; 
                    } ?>
                    </table>
                    <div class="row">
                    <div class="col-md-4"></div>
                        <div class="col-md-8">{{ $laporan->links() }}</div>
                    </div>
                    </div>
                </div>  
@endsection
 