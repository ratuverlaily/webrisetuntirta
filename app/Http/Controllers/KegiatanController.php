<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\Penelitian;

class KegiatanController extends Controller
{
    public function penelitianView()
    {
        $penelitians = Penelitian::all(); // SELECT * FROM mitras
        return view('pengunjung.kegiatan.penelitian', compact('penelitians'));
    }

    public function pengabdianView()
    {
        return view('pengunjung.kegiatan.pengabdianmasyarakat');
    }

    public function sfwView()
    {
        return view('pengunjung.kegiatan.sfw');
    }
}