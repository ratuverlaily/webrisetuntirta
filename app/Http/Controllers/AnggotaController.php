<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class AnggotaController extends Controller
{
    public function anggotaView()
    {
        $data = Pegawai::orderBy('id', 'asc')->get();
        return view('pengunjung.anggota.dosen', compact('data'));
    }
}