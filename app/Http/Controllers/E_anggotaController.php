<?php

namespace App\Http\Controllers;

class E_anggotaController extends Controller
{
    public function anggotaView() {
        return view('admin.dashboard');
    }

    public function anggotaCreate() {
        return view('admin.users');
    }

    public function anggotaStore() {
        return view('admin.roles');
    }

    public function anggotaShow() {
        return view('admin.logs');
    }

    public function anggotaEdit() {
        return view('admin.logs');
    }

    public function anggotaUpdate() {
        return view('admin.logs');
    }

    public function anggotaDestroy() {
        return view('admin.logs');
    }

}