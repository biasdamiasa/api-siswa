<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelasmodel extends Model
{
    protected $table = 'kelas';
    protected $pk = 'id_kelas';
    public $timestamps = false;

    protected $fillable = ['nama_kelas', 'kelompok'];
}

