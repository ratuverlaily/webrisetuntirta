<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class B_SfwController extends Controller
{
    public function sfwView() {
        return view('admin.dashboard');
    }

    public function sfwCreate() {
        return view('admin.users');
    }

    public function sfwStore() {
        return view('admin.roles');
    }

    public function sfwShow() {
        return view('admin.logs');
    }

    public function sfwEdit() {
        return view('admin.logs');
    }

    public function sfwUpdate() {
        return view('admin.logs');
    }

    public function sfwDestroy() {
        return view('admin.logs');
    }

}