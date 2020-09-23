<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class perencanaan extends Model
{
    protected $table = "perencanaan";
    public $timestamps = false;
    protected $primaryKey = 'code_mata_anggaran';
    public $incrementing = false;
    protected $keyType = 'string'; 
    // public $nullable = true;
    // protected $nullable = ['code_mata_anggaran', 'mata_anggaran', 'nama_program', 'waktu_pelaksanaan', 'peserta_kegiatan', 'satuan', 'harga_satuan', 'dana', 'sumber_dana', 'tujuan_kegiatan', 'pelaksanaa', 'tahun'];
    protected $fillable = ['code_mata_anggaran', 'mata_anggaran', 'nama_program', 'waktu_pelaksanaan', 'peserta_kegiatan', 'satuan', 'harga_satuan', 'dana', 'sumber_dana', 'tujuan_kegiatan', 'pelaksanaa', 'tahun'];
    // protected $fillable = false;    
}
