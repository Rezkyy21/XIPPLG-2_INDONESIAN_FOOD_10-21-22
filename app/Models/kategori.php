<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
    ];

    // Relasi dengan Makanan
    public function makanans()
    {
        return $this->hasMany(makanan::class);
    }
}