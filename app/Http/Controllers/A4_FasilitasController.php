<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Fasilitas;

class A4_FasilitasController extends Controller
{

    public function View(Request $request) {
        // Jika ingin menambahkan fitur pencarian
        $search = $request->get('search');

        $fasilitas = Fasilitas::when($search, function ($query, $search) {
                        $query->where('nama_instansi', 'like', "%{$search}%");
                    })
                    ->latest()
                    ->paginate(5) // jumlah data per halaman
                    ->withQueryString(); // agar query pencarian tetap ada di pagination

        return view('admin.tentang.fasilitas.index', compact('fasilitas', 'search'));

    }

    public function Create(){
        return view('admin.tentang.fasilitas.create');
    }

    public function Store(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/imgfasilitas'), $gambarName);

        Fasilitas::create([
            'userid' => session('id_user'),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
        ]);

        return redirect()->route('fasilitas.view')->with('success', 'Data berhasil ditambahkan!');
    }

    public function Show() {
        return view('admin.logs');
    }

    public function Edit() {
        return view('admin.logs');
    }

    public function Update() {
        return view('admin.logs');
    }

    public function Destroy() {
        return view('admin.logs');
    }

}