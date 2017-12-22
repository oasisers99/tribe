<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RedirectIfNotLoggedInAjax
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      if (!$request->ajax()) {
        Log::error("111");
        return response('Forbidden', 403);
      }

      if (!Auth::check()) {
        Log::error("222");
          return response(["status"=>"unauthed"]);
      }

      return $next($request);
    }
}