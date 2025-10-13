<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class A4_FasilitasController extends Controller
{
    public function fasilitasView() {
        return view('admin.dashboard');
    }

    public function fasiltasCreate() {
        return view('admin.users');
    }

    public function fasiltasStore() {
        return view('admin.roles');
    }

    public function fasiltasShow() {
        return view('admin.logs');
    }

    public function fasiltasEdit() {
        return view('admin.logs');
    }

    public function fasiltasUpdate() {
        return view('admin.logs');
    }

    public function fasiltasDestroy() {
        return view('admin.logs');
    }

}