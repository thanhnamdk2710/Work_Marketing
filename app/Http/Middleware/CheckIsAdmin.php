<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckIsAdmin
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
        if (Session::has('admin_name') && Session::has('admin_id')) {
            return $next($request);
        }

        return redirect()->route('admin.page_login');
    }
}
