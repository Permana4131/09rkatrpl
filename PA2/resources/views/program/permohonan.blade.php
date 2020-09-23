@extends('master') 
 
@section('konten')  

                    <div class="container">
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
                                    <p><?php echo $p->pengirim ?></p>
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
                                        <form action="{{route('permohonanPersetujuan')}}" method="post">
                                        @csrf
                                            <input type="hidden" name="id" value="<?php echo $p->id ?>">
                                            <input type="submit" class="dropdown-item" name="action" value="Terima">
                                            <input type="submit" class="dropdown-item" name="action" value="Tolak">      
                                        </form>          
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
@endsection