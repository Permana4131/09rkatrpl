<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Permohonan;
use App\Bagian_permohonan;
use App\Laporan;

class MahasiswaController extends Controller
{
    public function home(){
        if(session()->get('role') =="Mahasiswa"){
        return view('homeAdmin');
        }else{
            return redirect('login');
        }
    }

    public function uploadLaporan(){
        if(session()->get('role') == "Mahasiswa"){
            return view('mahasiswa.uploadLaporan');
        }else{
            return redirect('login');
        }
    }

    public function requestKegiatan(){
        if(session()->get('role') == "Mahasiswa"){

       
            $pengirim =session()->get('username');
            $permohonan = DB::table('permohonan')
            ->where('pengirim', $pengirim)
            ->get();
            
        $bagian_permohonan = Bagian_permohonan::all();

            return view('mahasiswa.requestKegiatan')->with(['permohonan'=>$permohonan, 'bagian_permohonan'=>$bagian_permohonan]);
        }else{
            return redirect('login');
        }
    }
    public function kwitansi(){
        if(session()->get('role') == "Mahasiswa"){
            return view('mahasiswa.kwitansi');
        }else{
            return redirect('login');
        }
    }

    public function kirimKegiatan(Request $request){
        $kegiatan = new Permohonan;

        $kegiatan2 = Permohonan::all(); 

        $keterangan = $request->input('keterangan');
        $jumlah = $request->input('jumlah');
        $sisa = $request->input('sisa');
        $kodeBudged = $request->input('kodeBudget');

        $jml = count($keterangan);


        $kegiatan->tahun =  $request->tahun;
        $kegiatan->tanggal =  $request->tanggal;
        $kegiatan->unit =  $request->unit;
        $kegiatan->nominal =  $request->nominal;
        $kegiatan->pengirim =  $request->pengirim;

        $status = "proses";
    
        $id = 0;
        $jp = count($kegiatan2);
        for($i=0;$i<$jp;$i++){
            $id = $kegiatan2[$i]->id+1;
        }
        
        $kegiatan->status = $status;
        $kegiatan->id = $id;
        $kegiatan->save();
        
        for($i=0;$i<$jml;$i++){
            $bagian_permohonan = new Bagian_permohonan;
            $bagian_permohonan->id_permohonan =  $id;
            $bagian_permohonan->keterangan = $keterangan[$i];
            $bagian_permohonan->jumlah = $jumlah[$i];
            $bagian_permohonan->sisa = $sisa[$i];
            $bagian_permohonan->kode_budget = $kodeBudged[$i];

            $bagian_permohonan->save();
        }

        $pengirim =session()->get('username');
        $permohonan = DB::table('permohonan')
        ->where('pengirim', $pengirim)
        ->get();
        
        $bagian_permohonan = Bagian_permohonan::all();

        return view('mahasiswa.requestKegiatan')->with(['permohonan'=>$permohonan, 'bagian_permohonan'=>$bagian_permohonan]);

    }


    public function index(){
        $permohonan = Permohonan::all();

        return view('program.permohonan', ['permohonan'=>$permohonan]);
    }
    

    public function persetujuan(Request $request){
        $id = $request->id;
        $permohonan = Permohonan::find($id);
        $disetujui = session()->get('username');
        switch ($request->input('action')) {
            case 'Terima':
                $status = "Terima";

                $permohonan->disetujui =$disetujui;
                $permohonan->status = $status;
                $permohonan ->update();
                $permohonan = Permohonan::all();
                return view('program.permohonan', ['permohonan'=>$permohonan]);
            break;
            case 'Tolak':
                $status = "Tolak";
                $permohonan->disetujui =$disetujui;
                $permohonan->status = $status;
                $permohonan ->update();
                $permohonan = Permohonan::all();
                return view('program.permohonan', ['permohonan'=>$permohonan]); 
            break;
        
        }

    }

    public function uploadLaporanProses(Request $request){
        $this->validate($request, [
			'file' => 'required',
			'keterangan' => 'required',
        ]); 
        

        $laporan = new Laporan();
        
        $tujuan_upload = 'data_file';
        $file= $request->file('file');
        $file_size = $file->getSize();
        $file_extension = $file->getClientOriginalExtension();
        $file_name2 = $file->getClientOriginalName();
        $file_name = pathinfo($file_name2,PATHINFO_FILENAME);
        $tst_id =$file_name.str_pad( 1, 8, '0', STR_PAD_LEFT);
        $transaction_id = $tst_id;
        $new_file_name = $transaction_id.".".$file_extension;
        $destination_path = public_path('/image');
        $file->move($destination_path,$new_file_name);
        
        $laporan->foto =  $new_file_name;

        // $image_path = public_path()."/image/".$laporan->foto;
        // if(file_exists($image_path)){
            
        // }
        
        $pengirim = session()->get('username');

      
        

        $laporan->pengirim = $pengirim;
        $laporan->keterangan = $request->keterangan;
      

        $laporan->save();
            
        return view('homeAdmin');



    }

   
}
