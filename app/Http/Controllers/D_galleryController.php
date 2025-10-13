<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class D_galleryController extends Controller
{
    public function galleryView() {
        return view('admin.dashboard');
    }

    public function galleryCreate() {
        return view('admin.users');
    }

    public function galleryStore() {
        return view('admin.roles');
    }

    public function galleryShow() {
        return view('admin.logs');
    }

    public function galleryEdit() {
        return view('admin.logs');
    }

    public function galleryUpdate() {
        return view('admin.logs');
    }

    public function galleryDestroy() {
        return view('admin.logs');
    }

}