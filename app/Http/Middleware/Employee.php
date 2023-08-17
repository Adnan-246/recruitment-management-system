<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Employee
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

        //     return redirect()->route('hm');
        // }

        // if (Auth::user()->role == 'Employee') {
        //     return $next($request);
        // }
       // return $next($request);

       if(Auth()->user()->role_id == 3){
        return $next($request);
            }

            return redirect('login')->with('error',"You don't have Employee access.");


            }
    }

