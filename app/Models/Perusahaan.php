<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan'; 
    protected $fillable = [
        'pemilik_perusahaan',
        'email_perusahaan',
        'nama_bisnis',
        'no_telp',
        'cabang_pusat',
        'foto_ktp',
        'foto_perusahaan',
        'deskripsi',
        'status',
        'alasan',
    ];
}
