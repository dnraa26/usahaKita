<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagSpesifikasi extends Model
{
    protected $table = 'tag_spesifikasi';
    protected $fillable = ['nama_tag'];

    public function lowongans()
    {
        return $this->belongsToMany(Lowongan::class, 'tagspesifikasi_lowongan', 'tag_id', 'lowongan_id')
                    ->withTimestamps();
    }
}
