<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class HR
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
        //     return $next($request);
        // }

        // if (Auth::user()->role == 'HM') {
        //     return redirect()->route('hm');
        // }

        // if (Auth::user()->role == 'Employee') {
        //     return redirect()->route('employee');
        // }
      //  return $next($request);

      if(Auth()->user()->role_id == 1){
        return $next($request);
            }

            return redirect('login')->with('error',"You don't have HR access.");


            }

            
}
