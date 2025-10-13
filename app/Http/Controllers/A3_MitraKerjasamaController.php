<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mitra;


class A3_MitraKerjasamaController extends Controller
{
    public function kerjasamaContent() {
        $mitra = Mitra::latest()->get();
        return view('pengunjung.tentang.mitra',compact('mitra'));
    }

    public function kerjasamaView(Request $request)
    {
        // Jika ingin menambahkan fitur pencarian
        $search = $request->get('search');

        $mitra = Mitra::when($search, function ($query, $search) {
                        $query->where('nama_instansi', 'like', "%{$search}%");
                    })
                    ->latest()
                    ->paginate(5) // jumlah data per halaman
                    ->withQueryString(); // agar query pencarian tetap ada di pagination

        return view('admin.tentang.mitra.index', compact('mitra', 'search'));
    }


    public function kerjasamaCreate() {
        return view('admin.tentang.mitra.create');
    }

    public function kerjasamaStore(Request $request) {
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'link_website' => 'required',
            'deskripsi' => 'required',
            'foto_logo' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $gambarName = time() . '.' . $request->foto_logo->extension();
        $request->foto_logo->move(public_path('assets/imgmitra'), $gambarName);

        Mitra::create([
            'userid' => session('id_user'),
            'nama_instansi' => $request->nama_instansi,
            'link_website' => $request->link_website,
            'deskripsi' => $request->deskripsi,
            'foto_logo' => $gambarName,
        ]);

        return redirect()->route('mitrakerjasama.view')->with('success', 'Data berhasil ditambahkan!');
    }

    public function kerjasamaEdit($id) {
        $mitra = Mitra::findOrFail($id);
        return view('admin.tentang.mitra.edit', compact('mitra'));
    }

    public function kerjasamaUpdate(Request $request, Mitra $mitra) {

        $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'foto_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link_website' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        $data = [
            'userid' => session('id_user'),
            'nama_instansi' => $request->nama_instansi,
            'link_website' => $request->link_website,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('foto_logo')) {
            // Hapus gambar lama
            if ($mitra->foto_logo && file_exists(public_path('assets/imgbr' . $mitra->foto_logo))) {
                unlink(public_path('assets/imgmitra' . $mitra->foto_logo));
            }

            $gambarName = time() . '.' . $request->foto_logo->extension();
            $request->foto_logo->move(public_path('assets/imgbr'), $gambarName);
            $data['foto_logo'] = $gambarName;
        }

        $mitra->update($data);

        return redirect()->route('mitrakerjasama.view')->with('success', 'Data berhasil diperbarui!');
    }

    public function kerjasamaDestroy(Mitra $mitra) {
        if ($mitra->foto_logo && file_exists(public_path('assets/imgmitra' . $mitra->foto_logo))) {
            unlink(public_path('assets/imgmitra' . $mitra->foto_logo));
        }

        $mitra->delete();
        return redirect()->route('mitrakerjasama.view')->with('success', 'Data berhasil dihapus!');
    }

}