<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programKegiatan extends Model
{
    protected $table = "program_kegiatan";
    public $timestamps = false;
    protected $primaryKey = 'tahun';
    public $incrementing = false;
    protected $keyType = 'string'; 
    
}
