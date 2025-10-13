<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_artikelController extends Controller
{
    public function paperView() {
        return view('admin.dashboard');
    }

    public function paperCreate() {
        return view('admin.users');
    }

    public function paperStore() {
        return view('admin.roles');
    }

    public function paperShow() {
        return view('admin.logs');
    }

    public function paperEdit() {
        return view('admin.logs');
    }

    public function paperUpdate() {
        return view('admin.logs');
    }

    public function paperDestroy() {
        return view('admin.logs');
    }

}