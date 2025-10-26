<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class B_ArtikelController extends Controller
{
    public function View() {
        $users = User::latest()->get();
        return view('admin.artikel.index', compact('users'));
    }

    public function Create() {
        return view('admin.dashboard.create');
    }

    public function Store(Request $request) {
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

    public function Edit(User $user) {
        return view('admin.dashboard.edit', compact('user'));
    }

    public function Update(Request $request, User $user) {
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

    public function Destroy(User $user) {
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'User berhasil dihapus.');
    }
}