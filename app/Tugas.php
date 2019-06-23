<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 'tugas';
    public $timestamps = false;
    protected $fillable = ['nama_siswa','nama_pelajaran','status_pengumpulan','nama_guru'];
}