<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class F_kontakController extends Controller
{
    public function kontakView() {
        return view('admin.dashboard');
    }

    public function kontakCreate() {
        return view('admin.users');
    }

    public function kontakStore() {
        return view('admin.roles');
    }

    public function kontakShow() {
        return view('admin.logs');
    }

    public function kontakEdit() {
        return view('admin.logs');
    }

    public function kontakUpdate() {
        return view('admin.logs');
    }

    public function kontakDestroy() {
        return view('admin.logs');
    }

}