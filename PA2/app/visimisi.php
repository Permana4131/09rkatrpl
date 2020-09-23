<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visimisi extends Model
{
    protected $table = "visimisi";
    public $timestamps = false;
    protected $primaryKey = 'tahun';
    public $incrementing = false;
    protected $keyType = 'string'; 
}
