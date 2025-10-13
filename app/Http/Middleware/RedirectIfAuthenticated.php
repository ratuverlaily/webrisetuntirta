<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        //Guard = mekanisme login, yang mengatur bagaimana Laravel mengenali user yang sedang login.
        //Guard tidak langsung “menyimpan data user”, tapi guard-lah yang mengambil data user dari session/token dan membuatnya tersedia lewat Auth::user().
        //Guard menyimpan status autentikasi (sudah login / belum).
        //Guard tahu siapa user yang login, karena dia menarik data dari provider (users table).
        //Kalau sudah login → guard bisa kasih akses ke data user.

        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // misalnya redirect ke home setelah login
                return redirect('/home');
            }
        }

        return $next($request);
    }
}
