<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;

use Redirect; //untuk redirect


use App\Mahasiswa;
use Illuminate\Http\Request;
use App\User;
use Session;
use DB;


class AuthController extends Controller
{
    public function login(){
    	return view('auth.login1')->with('sukses','Anda Berhasil Login');
    }

    public function postlogin(Request $request)
    {
        
        $data = DB::table('users')->where('username',$request->username)->first();
        
        if($data){
            if($data->role=="KA" && $data->password==$request->password){
                $request->session()->put('username',$data->username);
                $request->session()->put('role',$data->role);
                // return($request->session()->get('username'));
                // $request->session()->forget('username');
                // $data = $request->session()->has('guest');
                return redirect('/home')->with('sukses','Anda Berhasil Login');
                // return view('auth.login2');
            }else if($data->role=="Mahasiswa" && $data->password==$request->password){
                $request->session()->put('username',$data->username);
                $request->session()->put('role',$data->role);
                // return redirect('/home')->with('sukses','Anda Berhasil Login');
                // return redirect('/home');
                return redirect('/home');
            }else if($data->role=="Dosen" && $data->password==$request->password){
                $request->session()->put('username',$data->username);
                $request->session()->put('role',$data->role);
                // return redirect('/home')->with('sukses','Anda Berhasil Login');
                // return redirect('/home');
                return redirect('/home');
            }
        }
        return redirect('/login')->with('error','Akun Belum Terdaftar');

    }

    public function logout()
    {
        Session::flush();
    	return redirect('login')->with('sukses','Anda Telah Logout');
    }

    public function home(){
        return view('homeAdmin');
    }
}
