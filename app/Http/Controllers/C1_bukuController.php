<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C1_bukuController extends Controller
{
    public function bukuView() {
        return view('admin.dashboard');
    }

    public function bukuCreate() {
        return view('admin.users');
    }

    public function bukuStore() {
        return view('admin.roles');
    }

    public function bukuShow() {
        return view('admin.logs');
    }

    public function bukuEdit() {
        return view('admin.logs');
    }

    public function bukuUpdate() {
        return view('admin.logs');
    }

    public function bukuDestroy() {
        return view('admin.logs');
    }

}