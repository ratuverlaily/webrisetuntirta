<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontakView()
    {
        return view('pengunjung.kontak.kontak');
    }
}