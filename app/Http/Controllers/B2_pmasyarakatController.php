<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class B2_pmasyarakatController extends Controller
{
    public function pmasyarakatView() {
        return view('admin.dashboard');
    }

    public function pmasyarakatCreate() {
        return view('admin.users');
    }

    public function pmasyarakatStore() {
        return view('admin.roles');
    }

    public function pmasyarakatShow() {
        return view('admin.logs');
    }

    public function pmasyarakatEdit() {
        return view('admin.logs');
    }

    public function penelitianUpdate() {
        return view('admin.logs');
    }

    public function pmasyarakatDestroy() {
        return view('admin.logs');
    }

}