<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role == '2') {
                return $next($request);
            } else {
                return redirect('/errors')->with('message', 'Truy cập bị từ chối vì bạn không phải là Quản trị viên!');
            }
        } else {
            return redirect('/login')->with('message', 'Vui lòng đăng nhập để truy cập trang Quản trị viên!');
        }
        return $next($request);
    }
}