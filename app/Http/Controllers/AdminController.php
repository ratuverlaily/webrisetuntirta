<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function dashboardView() {
        $users = User::latest()->get();
        return view('admin.dashboard.index', compact('users'));
    }

    public function dashboardCreate() {
        return view('admin.dashboard.create');
    }

    public function dashboardStore(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'id_role' => 'required|integer',
            'password' => 'required|string|min:6'
        ]);

        $validated['password'] = Hash::make($request->password);

        User::create($validated);

        return redirect()->route('dashboard')->with('success', 'User berhasil ditambahkan.');
    }

    public function dashboardEdit(User $user) {
        return view('admin.dashboard.edit', compact('user'));
    }

    public function dashboardUpdate(Request $request, User $user) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'id_role' => 'required|integer',
            'password' => 'nullable|string|min:6'
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('dashboard')->with('success', 'User berhasil diperbarui.');
    }

    public function dashboardDestroy(User $user) {
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'User berhasil dihapus.');
    }
}