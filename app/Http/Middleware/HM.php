<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class HM
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
        // if (!Auth::check()) {
        //     return redirect()->route('login');
        // }

        // if (Auth::user()->role == 'HR') {
        //     return redirect()->route('hr');
        // }

        // if (Auth::user()->role == 'HM') {
        //     return $next($request);
        // }

        // if (Auth::user()->role == 'Employee') {
        //     return redirect()->route('employee');
        // }
       // return $next($request);

       if(Auth()->user()->role_id == 2){
        return $next($request);
            }

            return redirect('login')->with('error',"You don't have Hiring-Manager access.");


            }
    }

