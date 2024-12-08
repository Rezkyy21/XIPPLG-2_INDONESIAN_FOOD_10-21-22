<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'nama_pengguna',
        'password',
    ];

    // Jika Anda menggunakan hashing untuk password, sembunyikan password
    protected $hidden = [
        'password',
    ];
}
