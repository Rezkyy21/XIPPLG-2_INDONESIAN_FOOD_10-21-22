<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'deksripsi',
        'harga',
        'gambar',
        'kategori_id'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
