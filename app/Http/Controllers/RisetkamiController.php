<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RisetkamiController extends Controller
{
    public function risetkamiView()
    {
        return view('pengunjung.risetkami.index');
    }
}