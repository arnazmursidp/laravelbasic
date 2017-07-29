<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    public $primaryKey = 'id_siswa';
    protected $table = 't_siswa';
    protected $fillable = [
    	'nama_siswa'
    ];
}
