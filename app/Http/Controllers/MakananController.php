<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MakananController extends Controller
{
    // Menambahkan data makanan dengan gambar
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|exists:kategoris,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menangani file gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            // Menyimpan gambar di folder 'public/makanan_images' dan menyimpan pathnya
            $gambarPath = $request->file('gambar')->store('makanan_images', 'public');
        }

        // Menyimpan data makanan ke dalam database
        Makanan::create([
            'nama_makanan' => $request->nama_makanan,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'gambar' => $gambarPath, // Menyimpan path gambar
        ]);

        // Redirect setelah data berhasil ditambahkan
        return redirect()->route('makanan.index')->with('success', 'Makanan berhasil ditambahkan!');
    }

    // Menampilkan form edit makanan
    public function edit(Makanan $makanan)
    {
        return view('makanan.edit', compact('makanan'));
    }

    // Memperbarui data makanan dengan gambar baru
    public function update(Request $request, Makanan $makanan)
    {
        // Validasi input
        $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|exists:kategoris,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menyimpan path gambar lama
        $gambarPath = $makanan->gambar;

        // Jika ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama dari storage
            if ($gambarPath) {
                Storage::disk('public')->delete($gambarPath);
            }
            // Menyimpan gambar baru
            $gambarPath = $request->file('gambar')->store('makanan_images', 'public');
        }

        // Memperbarui data makanan
        $makanan->update([
            'nama_makanan' => $request->nama_makanan,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'gambar' => $gambarPath, // Menyimpan path gambar
        ]);

        // Redirect setelah data berhasil diperbarui
        return redirect()->route('makanan.index')->with('success', 'Makanan berhasil diperbarui!');
    }
}
