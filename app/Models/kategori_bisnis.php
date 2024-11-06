<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori_bisnis extends Model
{
    protected $table = 'kategori_bisnis';
    protected $fillable = [
        'nama_kategori',
    ];
}
