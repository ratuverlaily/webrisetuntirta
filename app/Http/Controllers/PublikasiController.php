<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function artikelView()
    {
        return view('pengunjung.publikasi.artikel');
    }

    public function bukuView()
    {
        return view('pengunjung.publikasi.buku');
    }

    public function chapterView()
    {
        return view('pengunjung.publikasi.chapter');
    }

    public function makalaView()
    {
        return view('pengunjung.publikasi.makala');
    }

    public function paperView()
    {
        return view('pengunjung.publikasi.paper');
    }

    public function seminarView()
    {
        return view('pengunjung.publikasi.seminar');
    }
}