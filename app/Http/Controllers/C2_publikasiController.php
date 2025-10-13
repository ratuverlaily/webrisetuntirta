<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C2_publikasiController extends Controller
{
    public function publikasiView() {
        return view('admin.dashboard');
    }

    public function publikasiCreate() {
        return view('admin.users');
    }

    public function publikasiStore() {
        return view('admin.roles');
    }

    public function publikasiShow() {
        return view('admin.logs');
    }

    public function publikasiEdit() {
        return view('admin.logs');
    }

    public function publikasiUpdate() {
        return view('admin.logs');
    }

    public function publikasiDestroy() {
        return view('admin.logs');
    }

}