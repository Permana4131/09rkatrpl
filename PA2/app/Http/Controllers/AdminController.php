<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\programKegiatan;
use App\program;
use App\perencanaan;
use App\Laporan;
use App\visimisi;
use DB;

class AdminController extends Controller
{
    public function home(){
        if(session()->get('role') =="KA"){
        return view('homeAdmin');
        }else{
            return redirect('login');
        }
    }

    public function programKegiatan(){    
        $programKegiatan = DB::table('program_kegiatan')
        ->paginate(4);
        return view('programKegiatan', ['programKegiatan' => $programKegiatan]);
    }

    public function daftarProgram($tahun, $tahun2){

        // return view('daftarProgram');

        $tahun3 =  $tahun."/".$tahun2;
        $program = DB::table('program')
        ->where('tahun', $tahun3)
        ->get();

        
        $visi = DB::table('visimisi')
        ->where('tahun', $tahun3 )
        ->get();


        $perencanaan = DB::table('perencanaan')
        ->where('tahun', $tahun3 )
        ->get();
        return view('daftarProgram', ['visi'=>$visi, 'tahun'=>$tahun3,'program' => $program, 'perencanaan' => $perencanaan]);
    }

    public function cariProgram(Request $request){
        $cari = $request->cari;

        $tahun = $request->tahun;

        $program = DB::table('program')
        ->where('mata_anggaran','like',"%".$cari."%")
        ->where('tahun', $tahun)
        ->get();

        
        $visi = DB::table('visimisi')
        ->where('tahun', $tahun )
        ->get();

        $perencanaan = DB::table('perencanaan')
        ->where('tahun', $tahun )
        ->get();
        return view('daftarProgram', ['visi'=>$visi, 'tahun'=>$tahun,'program' => $program, 'perencanaan' => $perencanaan]);

    }

    public function revisi(){
        return view('revisi');
    }

    public function realisasi(){
        return view('realisasi');
    }

    public function tambah(){
        $tanggal=getdate();
        $tanggal2 = $tanggal['year']+1;
        
        $tahun =  $tanggal['year'].'/'.$tanggal2;

        $visi =  DB::table('visimisi')
        ->where('tahun', $tahun)
        ->get();

        if(count($visi)!=0){
            return view('program.tambahpage2');
        }else{
            return view('program.tambah');
        }
       
    }
    public function tambah2(Request $request){
        $visi = new visimisi();
        $visi->tahun = $request->tahun;
        $visi->visi = $request->visi;
        $visi->misi = $request->misi;

        $visi->save();

        return view('program.tambahpage2');
    }

    public function store(Request $request){
        $programKegiatan = new programKegiatan;

        $perencanaan = new perencanaan;
        $program= new program;
        $programKegiatan1 = DB::table('program_kegiatan')->get();
        $program1 = DB::table('program')->get();
        // $this->validate($request,[
    	// 	'standar' => 'required',
    	// 	'mata_anggaran' => 'required'
        // ]);
      
        $namaKegiatan = $request->input('namaKegiatan');
        $tujuan = $request->input('tujuan');
        $pesrtaKegiatan = $request->input('pesertaKegiatan');
        $vol = $request->input('vol');
        $satuan = $request->input('satuan');
        $harga = $request->input('harga');
        $sumberDana = $request->input('sumberDana');
        $dana = $request->input('dana');
        $pelaksana = $request->input('pelaksana');
        $tanggal_pelaksanaan = $request->input('tanggal');
            
        $sNamaKegiatan = count($namaKegiatan);

        $jumlah = 0;
        $cek = 0;
        $thn =  $request->tahun;
        $tDana = 0;
        $pTr = 0;
        
        $totalProgram = count($program1);

        if(count($programKegiatan1)>0){
            foreach($programKegiatan1 as $progKeg){
                if($progKeg->tahun == $request->tahun){             
                    $cek = 1;
                }
            }
        }

       


       

        if(count($program1)>0){
            foreach($program1 as $prog){
                if($prog->mata_anggaran == $request->mata_anggaran){
                    $pTr= 1;
             }
                                   
            }
        }

        if($pTr ==0){
            $totalProgram +=1;
        }


        

     
     
        switch ($request->input('action')) {
            case 'Selesai':
                for($i =0; $i< $sNamaKegiatan;$i++){
   
                     $perencanaan = new perencanaan;
                     $perencanaan->code_mata_anggaran =  $request->mata_anggaran.".".($i+1);
                     $perencanaan->mata_anggaran = $request->mata_anggaran;
                     $perencanaan->nama_program = $namaKegiatan[$i];
                     $perencanaan->waktu_pelaksanaan =  $tanggal_pelaksanaan[$i];
                     $perencanaan->peserta_kegiatan = $pesrtaKegiatan[$i];
                     $perencanaan->satuan = $satuan[$i];
                     $perencanaan->vol = $vol[$i];
                     $perencanaan->harga_satuan = $harga[$i];
                     $perencanaan->dana = $dana[$i];
                     $perencanaan->sumber_dana = $sumberDana[$i];
                     $perencanaan->tujuan_kegiatan = $tujuan[$i];
                     $perencanaan->pelaksana = $pelaksana[$i];
                     $perencanaan->tahun = $request->tahun;
                     $perencanaan->save(); 

                    $jumlah += $dana[$i];   
                    
                    if($cek==0){
                        $tDana = $programKegiatanup ->total +$jumlah;
                        $terpakai = $programKegiatanup ->terpakai;
                        $programKegiatan->tahun = $request->tahun;
                        $programKegiatan->jumlah_program =$totalProgram;
                        $programKegiatan ->terpakai = $tDana - $terpakai;;
                        $programKegiatan ->sisa = $tDana - $terpakai;;
                        $programKegiatan ->total =  $tDana;
            
                        $programKegiatan->save();
                    }else{
                        $programKegiatanup = programKegiatan::find($thn);
                        
                        $tDana = $programKegiatanup ->total +$jumlah;
                        $terpakai = $programKegiatanup ->terpakai;
                        $programKegiatanup->jumlah_program = $totalProgram;
                        $programKegiatanup ->total = $tDana;
                        $programKegiatanup ->sisa = $tDana - $terpakai;
                        $programKegiatanup ->update();
                    }

                    if($pTr==0){
                        $program->mata_anggaran = $request->mata_anggaran;
                        $program->nama_progaram	 = $request->nama_program;
                        $program->jumlah = $jumlah;
                        $program->tahun = $request->tahun;
                        $program->save();
                    }
                

                    // if(count($program1)>0){
                    //     foreach($program1 as $prog){
                    //         if($prog->mata_anggaran != $request->mata_anggaran){
                    //             $program->mata_anggaran = $request->mata_anggaran;
                    //             $program->nama   _progaram	 = $request->nama_program;
                    //             $program->jumlah = $jumlah;
                    //             $program->tahun = $request->tahun;
                    //             $program->save();
                    //         }else{
                    //         }
                    //      }
                                               
                    //     }
                    
                  }
                return redirect('/programKegiatan');
            break;
            case 'Tambahkan Perancanaan Lagi':
                for($i =0; $i< $sNamaKegiatan;$i++){
                    //  $perencanaan->mata_anggaran = $request->mata_anggaran.$i;
                    //  $request->mata_anggaran.".".$i;
                    //  echo($request->mata_anggaran.".".$i);
                     
                     $perencanaan = new perencanaan;
                     $perencanaan->code_mata_anggaran =  $request->mata_anggaran.".".($i+1);
                     $perencanaan->mata_anggaran = $request->mata_anggaran;
                     $perencanaan->nama_program = $namaKegiatan[$i];
                     $perencanaan->waktu_pelaksanaan =  $tanggal_pelaksanaan[$i];
                     $perencanaan->peserta_kegiatan = $pesrtaKegiatan[$i];
                     $perencanaan->satuan = $satuan[$i];
                     $perencanaan->vol = $vol[$i];
                     $perencanaan->harga_satuan = $harga[$i];
                     $perencanaan->dana = $dana[$i];
                     $perencanaan->sumber_dana = $sumberDana[$i];
                     $perencanaan->tujuan_kegiatan = $tujuan[$i];
                     $perencanaan->pelaksana = $pelaksana[$i];
                     $perencanaan->tahun = $request->tahun;
                     $perencanaan->save(); 

                    $jumlah += $dana[$i];            
                    
                    // DB::table("perencanaan") -> insert($perencanaan);
                    }

                    if($cek==0){
                        $programKegiatan->tahun = $request->tahun;
                        $programKegiatan->jumlah_program = 0;
                        $programKegiatan ->terpakai =0;
                        $programKegiatan ->sisa = 0;
                        $programKegiatan ->total = 0;
            
                        $programKegiatan->save();
                    }else{
                        $programKegiatanup = programKegiatan::find($thn);

                        $tDana = $programKegiatanup ->total +$jumlah;
                        $terpakai = $programKegiatanup ->terpakai;
                        $programKegiatanup ->total = $tDana;
                        $programKegiatanup ->sisa = $tDana - $terpakai;
                        $programKegiatanup ->update();
                    }
        
           


                    if($pTr==0){
                        $program->mata_anggaran = $request->mata_anggaran;
                        $program->nama_progaram	 = $request->nama_program;
                        $program->jumlah = $jumlah;
                        $program->tahun = $request->tahun;
                        $program->save();
                    }
                
        
                     return redirect('/programKegiatan/tambah2');
            break;

            default:
             return "false";
        break;
        }


      

        // for($i =0; $i< $length;$i++){
        //     echo $array[$i];
        // }

        // $program->mata_anggaran = $request->mata_anggaran;
        // $program->nama_progaram	 = $request->nama_program;
        // $program->jumlah = $request->jumlah;
        // $program->save();

        // foreach($array as $key=>$value){
        //   print $value;
        // }

    
    }

    public function deleteProgramKegiatan($mata_anggaran, $tahun, $tahun2){
        // $programKegiatan = programKegiatan::find($mata_anggaran);
        
        $perencanaan = DB::table('perencanaan')
        ->where('mata_anggaran', $mata_anggaran);

        $perencanaan->delete();
        $program=  DB::table('program')
        ->where('mata_anggaran', $mata_anggaran);
        $program->delete();

        $tahun3 =  $tahun."/".$tahun2;
        $program = DB::table('program')
        ->where('tahun', $tahun3)
        ->get();


        $visi = DB::table('visimisi')
        ->where('tahun', $tahun3 )
        ->get();

        $perencanaan = DB::table('perencanaan')
        ->where('tahun', $tahun3 )
        ->get();
        return view('daftarProgram', ['tahun'=>$tahun3,'visi'=>$visi ,'program' => $program, 'perencanaan' => $perencanaan]);
    }

    public function tambahPrestasi(){
        return view('tambahPrestasi');
    }

    public function edit($mata_anggaran){
        // return view('program.edit');
        $perencanaan = DB::table('perencanaan')
        ->where('mata_anggaran', $mata_anggaran)
        ->get();
        $program=  DB::table('program')
        ->where('mata_anggaran', $mata_anggaran)
        ->get();
        return view('program.edit', ['program' => $program, 'perencanaan' => $perencanaan]);
    }

    public function simpanEditProgram(Request $request){

          
        $kodeMataAnggaran = $request->input('kode_mata_anggaran');
        $namaKegiatan = $request->input('namaKegiatan');
        $tujuan = $request->input('tujuan');
        $pesrtaKegiatan = $request->input('pesertaKegiatan');
        $vol = $request->input('vol');
        $satuan = $request->input('satuan');
        $harga = $request->input('harga');
        $sumberDana = $request->input('sumberDana');
        $dana = $request->input('dana');
        $pelaksana = $request->input('pelaksana');
        $tanggal_pelaksanaan = $request->input('tanggal');
            
        $kMA = count($kodeMataAnggaran);

        switch ($request->input('action')) {
            case 'Simpan':
                for($i=0;$i<$kMA;$i++){
                    $perencanaan = perencanaan::find($kodeMataAnggaran[$i]);
                // $perencanaan = DB::table('perencanaan')
                // ->where('code_mata_anggaran', $kodeMataAnggaran[$i])
                // ->get();
                
                $perencanaan->nama_program = $namaKegiatan[$i];
                $perencanaan->waktu_pelaksanaan =  $tanggal_pelaksanaan[$i];
                $perencanaan->peserta_kegiatan = $pesrtaKegiatan[$i];
                $perencanaan->satuan = $satuan[$i];
                $perencanaan->vol = $vol[$i];
                $perencanaan->harga_satuan = $harga[$i];
                $perencanaan->dana = $dana[$i];
                $perencanaan->sumber_dana = $sumberDana[$i];
                $perencanaan->tujuan_kegiatan = $tujuan[$i];
                $perencanaan->pelaksana = $pelaksana[$i];
                
             
                $perencanaan->update();
                }

                $mata_ang = $request->mata_anggaran;
           

                $program = program::find($mata_ang);
                $program->nama_progaram = $request->nama_program;
                $program->update();


                $tahun3 =  $request->tahun;
                $program = DB::table('program')
                ->where('tahun', $tahun3)
                ->get();
                
                
                $visi = DB::table('visimisi')
                ->where('tahun', $tahun3 )
                ->get();

        
                $perencanaan = DB::table('perencanaan')
                ->where('tahun', $tahun3)
                ->get();
                return \Redirect::route('daftarProgram2', ['visi'=>$visi, 'tahun'=>$tahun3])->with(['program' => $program, 'perencanaan' => $perencanaan]);

            break;
            case 'Batal':
                $tahun3 =  $request->tahun;
                $program = DB::table('program')
                ->where('tahun', $tahun3)
                ->get();
                

                
                $visi = DB::table('visimisi')
                ->where('tahun', $tahun3 )
                ->get();
        
                $perencanaan = DB::table('perencanaan')
                ->where('tahun', $tahun3)
                ->get();
                return \Redirect::route('daftarProgram2', ['visi'=>$visi, 'tahun'=>$tahun3])->with(['program' => $program, 'perencanaan' => $perencanaan]);

            break;
            default:
            echo eror;
         break;
            }
    }

    public function prestasi(){
        return view('prestasi');
    }

    public function prestasiSelanjutnya(){
        return view('prestasiSelanjutnya');
    }

    public function cetakLaporan(){
        return view('cetakLaporan');
    }

    public function kwitansi(){
        return view('kwitansi');
    }

    public function indexLaporan(){
        if(session()->get('role') == "KA"){
            $laporan = DB::table('laporan')->paginate(5);
           return view('program.laporan',['laporan'=>$laporan]);
        }else{
            return redirect('login');
        }
    }

    
}
