<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C3_makalaController extends Controller
{
    public function makalaView() {
        return view('admin.dashboard');
    }

    public function makalaCreate() {
        return view('admin.users');
    }

    public function makalaStore() {
        return view('admin.roles');
    }

    public function makalaShow() {
        return view('admin.logs');
    }

    public function makalaEdit() {
        return view('admin.logs');
    }

    public function makalaUpdate() {
        return view('admin.logs');
    }

    public function makalaDestroy() {
        return view('admin.logs');
    }

}