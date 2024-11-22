<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongan';

    protected $fillable = [
        'nama_lowongan',
        'perusahaan_id',
        'alamat',
        'requirement',
        'benefit',
        'modal_usaha',
        'jumlah_lowongan',
        'logo_perusahaan',
        'status',
    ];
    
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id');
    }

    public function bergabungPerusahaan()
    {
        return $this->hasMany(BergabungPerusahaan::class, 'lowongan_id');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'lowongan_id');
    }
}
