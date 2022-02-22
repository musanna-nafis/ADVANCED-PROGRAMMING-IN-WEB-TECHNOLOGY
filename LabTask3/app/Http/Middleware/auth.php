<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class auth
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
        if(!$request->session()->get('role'))
        {
            return redirect()->route('login');
        }
        else if($request->session()->get('role')=='student')
        {
            return redirect()->route('student');
        }
        else if($request->session()->get('role')=='teacher')
        {
            return redirect()->route('teacher');
        }
        else if($request->session()->get('role')=='admin')
        {
            return redirect()->route('admin');
        }
        else
        {
            return $next($request);
        }
       
    }
}
