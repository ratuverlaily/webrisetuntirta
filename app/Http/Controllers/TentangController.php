<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\Fasilitas;
use App\Models\VisiMisi;
use App\Models\FokusPenelitian;
use App\Models\Roadmap;

class TentangController extends Controller
{
    public function visimisiView()
    {
        $visimisi = VisiMisi::first();
        return view('pengunjung.tentang.visimisi',compact('visimisi'));
    }

    public function fokuspenelitianView()
    {
        $fokusPenelitian = FokusPenelitian::all();
        return view('pengunjung.tentang.fokuspenelitian',compact('fokusPenelitian'));
    }

    public function roadmapView()
    {
        $roadmap = Roadmap::first();
        return view('pengunjung.tentang.roadmap',compact('roadmap'));
    }

    public function mitraView()
    {
        $mitra = Mitra::all(); // SELECT * FROM mitras
        return view('pengunjung.tentang.mitra', compact('mitra'));
    }

    public function fasilitasView()
    {
        $labs = Fasilitas::all();
        return view('pengunjung.tentang.fasilitas', compact('labs'));
    }
}