<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    protected $table = "program";
    public $timestamps = false;
    protected $primaryKey = 'mata_anggaran';
    public $incrementing = false;
    protected $keyType = 'string'; 
}
