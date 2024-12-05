<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'email',
        'password',
        'role',
        'new_email', 
        'verification_code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role');
    }

    public function perusahaan()
    {
        return $this->hasOne(Perusahaan::class, 'user_id');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'user_id');
    }

    public function bergabungPerusahaan()
    {
        return $this->hasMany(BergabungPerusahaan::class, 'user_id');
    }

    public function lowongan()
    {
        return $this->hasManyThrough(Lowongan::class, Perusahaan::class, 'user_id', 'perusahaan_id', 'id', 'id');
    }

    public function profile()
    {
        return $this->hasOne(ProfileUser::class, 'user_id', 'id');
    }
}
