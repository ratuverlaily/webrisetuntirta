<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C5_chaptersController extends Controller
{
    public function chaptersView() {
        return view('admin.dashboard');
    }

    public function chaptersCreate() {
        return view('admin.users');
    }

    public function chaptersStore() {
        return view('admin.roles');
    }

    public function chaptersShow() {
        return view('admin.logs');
    }

    public function chaptersEdit() {
        return view('admin.logs');
    }

    public function chaptersUpdate() {
        return view('admin.logs');
    }

    public function chaptersDestroy() {
        return view('admin.logs');
    }

}