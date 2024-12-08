<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;


class makanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_makanan',
        'deskripsi',
        'kategori_id',
        'gambar',
        'harga'
    ];

    // Relasi dengan Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
