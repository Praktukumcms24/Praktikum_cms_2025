<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan dengan pagination dan search
    public function index(Request $request)
    {
        // Mendapatkan data berdasarkan pencarian jika ada
        $search = $request->get('search');
        $pelanggans = Pelanggan::when($search, function ($query, $search) {
            return $query->where('nama', 'like', "%{$search}%")
                         ->orWhere('email', 'like', "%{$search}%")
                         ->orWhere('alamat', 'like', "%{$search}%");
        })->paginate(5);  // Pagination 5 data per halaman

        return view('pelanggan.index', compact('pelanggans'));
    }

    // Menampilkan form untuk tambah pelanggan
    public function create()
    {
        return view('pelanggan.create');
    }

    // Menyimpan data pelanggan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        Pelanggan::create($request->all());

        return redirect('/pelanggan')->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    // Menampilkan form untuk edit pelanggan
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    // Menyimpan perubahan data pelanggan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return redirect('/pelanggan')->with('success', 'Pelanggan berhasil diupdate!');
    }

    // Menghapus data pelanggan
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect('/pelanggan')->with('success', 'Pelanggan berhasil dihapus!');
    }
}
