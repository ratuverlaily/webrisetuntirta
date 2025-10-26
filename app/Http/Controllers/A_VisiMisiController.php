<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\VisiMisi;

class A_VisiMisiController extends Controller
{
    public function Content(){
        $visimisi = VisiMisi::first();
        return view('pengunjung.tentang.visimisi',compact('visimisi'));
    }

    public function View() {
        // Ambil data pertama (karena biasanya hanya satu konten visi misi)
        $visimisi = VisiMisi::first();
        return view('admin.tentang.visimisi.index',compact('visimisi'));
    }

    public function Store(Request $request) {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        VisiMisi::create([
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Visi Misi berhasil disimpan.');
    }

    public function Update(Request $request, $id) {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $visimisi = VisiMisi::findOrFail($id);
        $visimisi->update([
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Visi Misi berhasil diperbarui.');
    }

}