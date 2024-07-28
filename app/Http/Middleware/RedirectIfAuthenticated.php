<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * The path to redirect to when authenticated.
     *
     * @var string
     */
    protected $redirectTo = '/home'; // Halaman yang akan dituju jika pengguna sudah login

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Periksa jika pengguna sudah terautentikasi
        if (Auth::guard($guard)->check()) {
            // Redirect ke halaman yang telah ditentukan
            return redirect($this->redirectTo);
        }

        // Lanjutkan dengan request jika pengguna belum terautentikasi
        return $next($request);
    }
}
