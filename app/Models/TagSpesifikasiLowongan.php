<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagSpesifikasiLowongan extends Model
{
    protected $table = 'tagspesifikasi_lowongan';
    protected $fillable = [
        'lowongan_id',
        'tag_spesifikasi_id'
    ];

    public function lowongans()
    {
        return $this->belongsToMany(Lowongan::class, 'tagspesifikasi_lowongan', 'tag_id', 'lowongan_id');
    }
}
