<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'AuthController@home')->name('home');

Route::get('/programKegiatan', 'AdminController@programKegiatan')->name('programKegiatan');

Route::get('/programKegiatan/daftarProgram/{tahun}/{tahun2}','AdminController@daftarProgram')->name('daftarProgram');
Route::get('/programKegiatan/daftarProgram/{tahun}','AdminController@daftarProgram')->name('daftarProgram2');

Route::get("/revisi",'AdminController@Revisi');

Route::get("/programKegiatan/tambah",'AdminController@tambah')->name('tambahProgram');

// Route::get("/programKegiatan/tambah2",'AdminController@tambah2')->name('tambahProgram2');

Route::get("/programKegiatan/delete/{mata_anggaran}/{tahun}/{tahun2}",'AdminController@deleteProgramKegiatan');
Route::post("/programKegiatan/cari",'AdminController@cariProgram')->name('cariProgram');

Route::post("/programKegiatan/tambah2",'AdminController@tambah2')->name('tambahProgram2');

Route::post('/pgrogramKegiatan/sotre','AdminController@store')->name('storeProgram');

Route::get("/prestasi/tambahPrestasi",'AdminController@tambahPrestasi');

Route::get("/programKegiatan/edit/{mata_anggaran}",'AdminController@edit')->name('editProgram');

Route::post("/programKegiatan/edit",'AdminController@simpanEditProgram')->name('simpanEditProgram');


Route::get("/realisasi",'AdminController@Realisasi')->name('realisasi');

Route::get("/login1",'LoginController@Login');

Auth::routes();

Route::get('/login', 'LoginController@login')->name('login');

Route::post('/login2', 'AuthController@postlogin')->name('login2');

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/uploadLaporan','MahasiswaController@uploadLaporan')->name('uploadLaporan');

Route::get('/requestKegiatan','MahasiswaController@requestKegiatan')->name('requestKegiatan');

Route::get('/kwitansi','MahasiswaController@kwitansi')->name('kwitansi');

Route::get('/uploadLaporan1','DosenController@uploadLaporan')->name('uploadLaporanDosen');

Route::get('/requestKegiatan1','DosenController@requestKegiatan')->name('requestKegiatanDosen');

Route::get('/kwitansi1','DosenController@kwitansi')->name('kwitansiDosen');

Route::get('/prestasi', 'AdminController@prestasi')->name('prestasi');


Route::get('/prestasi/prestasiSelanjutnya', 'AdminController@prestasiSelanjutnya');

Route::get("prestasi/tambahPrestasi", "AdminController@tambah")->name("tambahPrestasi");

Route::get('/cetakLaporan', 'AdminController@cetakLaporan')->name('cetakLaporan');

Route::get('/kwitansi', 'AdminController@kwitansi')->name('kwitansi');

Route::post('/perencanaan/store','PerencanaanController@store')->name('tambahPerencanaan');

Route::post('/requestKegiatan1/kirim','MahasiswaController@kirimKegiatan')->name('requestKegiatan1');

Route::get('permohonan/index','MahasiswaController@index')->name('permohonan');

Route::post('permohonan/persetujuan','MahasiswaController@persetujuan')->name('permohonanPersetujuan');

Route::post('/laporan/upload','MahasiswaController@uploadLaporanProses')->name('uploadLaporanProses');

Route::get('/laporan/index','AdminController@indexLaporan')->name('indexLaporanProses');


