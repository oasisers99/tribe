<?php
/**
 * Created by PhpStorm.
 * User: songminseok
 * Date: 23/7/17
 * Time: 11:23 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotLoggedIn
{

    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::check()) {
            return redirect()->route('auth.loginForm')->with('warning','Please login.');
        }

        return $next($request);
    }
}