<?php

namespace App\Http\Controllers;

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