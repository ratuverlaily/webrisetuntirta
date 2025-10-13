<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class B1_penelitianController extends Controller
{
    public function penelitianView() {
        return view('admin.dashboard');
    }

    public function penelitianCreate() {
        return view('admin.users');
    }

    public function penelitianStore() {
        return view('admin.roles');
    }

    public function penelitianShow() {
        return view('admin.logs');
    }

    public function penelitianEdit() {
        return view('admin.logs');
    }

    public function penelitianUpdate() {
        return view('admin.logs');
    }

    public function penelitianDestroy() {
        return view('admin.logs');
    }

}