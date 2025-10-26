<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Mitra;
use App\Models\FokusPenelitian;


class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Pastikan role_id tersedia
        $roleId = $user->id_role ?? null;
        return match ($roleId) {
            1 => view('admin.dashboard', ['user' => Auth::user()]),
            default => view('auth.login'),
        };
    }

    public function viepengunjung()
    {
        $mitra = Mitra::latest()->get();
        $fokusPenelitian = FokusPenelitian::latest()->get();

        return view('pengunjung.home',compact('mitra','fokusPenelitian'));
    }

}
