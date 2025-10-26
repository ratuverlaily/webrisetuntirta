<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelPenelitian;

class ArtikelController extends Controller
{
    public function artikelView()
    {
        // Ambil data artikel dengan pagination (misal 6 per halaman)
        $artikels = ArtikelPenelitian::orderBy('created_at', 'desc')->paginate(6);

        return view('pengunjung.artikel.index', compact('artikels'));
    }
}