<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Permohonan;
use App\Bagian_permohonan;
use App\Laporan;


class DosenController extends Controller
{
    public function home(){
        if(session()->get('role') =="Dosen"){
        return view('homeAdmin');
        }else{
            return redirect('login');
        }
    }

    public function uploadLaporan(){
        if(session()->get('role') == "Dosen"){
            return view('mahasiswa.uploadLaporan');
        }else{
            return redirect('login');
        }
    }

    public function requestKegiatan(){
        if(session()->get('role') == "Dosen"){
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
        if(session()->get('role') == "Dosen"){
            return view('mahasiswa.kwitansi');
        }else{
            return redirect('login');
        }
    }

}
