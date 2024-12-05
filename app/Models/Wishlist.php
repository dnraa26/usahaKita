<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';

    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'lowongan_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }   

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'lowongan_id');
    }

    
}

