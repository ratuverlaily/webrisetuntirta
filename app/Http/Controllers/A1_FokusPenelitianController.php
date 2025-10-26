<?php

namespace App\Http\Controllers;

use App\Models\FokusPenelitian;
use Illuminate\Http\Request;

class A1_FokusPenelitianController extends Controller
{
    public function View() {
        $fokusPenelitian = FokusPenelitian::latest()->get();
        return view('admin.tentang.fokuspenelitian.index',compact('fokusPenelitian'));
    }

    public function Content(){
        $fokusPenelitian = FokusPenelitian::all();
        return view('pengunjung.tentang.fokuspenelitian',compact('fokusPenelitian'));
    }

    public function Create() {
        return view('admin.tentang.fokuspenelitian.create');
    }

    public function Store(Request $request) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/imgbr'), $gambarName);

        FokusPenelitian::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
        ]);

        return redirect()->route('fokuspenelitian.view')->with('success', 'Data berhasil ditambahkan!');
    }

    public function Edit($id) {
        $fokus = FokusPenelitian::findOrFail($id);
        return view('admin.tentang.fokuspenelitian.edit', compact('fokus'));
    }

    public function Update(Request $request, FokusPenelitian $fokus) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($fokus->gambar && file_exists(public_path('assets/imgbr' . $fokus->gambar))) {
                unlink(public_path('assets/imgbr' . $fokus->gambar));
            }

            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('assets/imgbr'), $gambarName);
            $data['gambar'] = $gambarName;
        }

        $fokus->update($data);

        return redirect()->route('fokuspenelitian.view')->with('success', 'Data berhasil diperbarui!');
    }

    public function Destroy(FokusPenelitian $fokus) {
        if ($fokus->gambar && file_exists(public_path('assets/imgbr' . $fokus->gambar))) {
            unlink(public_path('assets/imgbr' . $fokus->gambar));
        }

        $fokus->delete();
        return redirect()->route('fokuspenelitian.view')->with('success', 'Data berhasil dihapus!');
    }

}