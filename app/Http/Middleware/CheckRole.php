<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Usage in routes: ->middleware('checkrole:1,2,3')
     * Parameter are role_id numbers or role names (see optional example).
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // ambil user dari request (lebih aman daripada helper auth() di beberapa konteks)
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login');
        }

        // prioritas: role_id (integer). Jika Anda ingin mendukung nama role,
        // Anda bisa menambahkan logic tambahan.
        $userRoleId = $user->id_role ?? null;

        // normalisasi allowed role ids ke integer
        //Karena $roles (daftar role yang boleh masuk) bisa datang dalam berbagai bentuk string/angka campur-campur.
        /*Fungsi array_map('intval', $roles)
        intval mengubah setiap item jadi integer.
        array_map menjalankan fungsi intval ke seluruh elemen array.*/
        $allowed = array_map('intval', $roles);

        //Hanya user dengan role angka yang benar² ada di daftar $allowed yang boleh lanjut
        if (is_numeric($userRoleId) && in_array((int)$userRoleId, $allowed, true)) {
            return $next($request);
        }

        // Jika tidak sesuai, 403
        abort(403, 'Unauthorized.');
    }
}
