<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\User;
use App\Models\Role;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
  //  protected $redirectTo = RouteServiceProvider::HOME;
  //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //  $this->middleware('guest')->except('logout');
    }

    protected $redirectTo;

    public function redirectTo()
    {
        switch(Auth::user()->role_id){
            case '1':
            $this->redirectTo = '/hr';
            return $this->redirectTo;
                break;
            case '2':
                    $this->redirectTo = '/hm';
                return $this->redirectTo;
                break;
            case '3':
                $this->redirectTo = '/employee';
                return $this->redirectTo;
                break;
 
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
 
        // return $next($request);
    }
}


// class LoginController extends Controller
// {
//     /*
//     |--------------------------------------------------------------------------
//     | Login Controller
//     |--------------------------------------------------------------------------
//     |
//     | This controller handles authenticating users for the application and
//     | redirecting them to your home screen. The controller uses a trait
//     | to conveniently provide its functionality to your applications.
//     |
//     */
  
//     use AuthenticatesUsers;
  
//     /**
//      * Where to redirect users after login.
//      *
//      * @var string
//      */
//    // protected $redirectTo = '/home';
   
//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//         $this->middleware('HR');
//         $this->middleware('HM');
//         $this->middleware('Employee');
//     }
   
//     public function login(Request $request)
//     {  
//         $user = User::all(); 
//         dd($user);
//         $input = $request->all();
   
//         $this->validate($request, [
//             'role_id' => 'required',
//             'email' => 'required|email',
//             'password' => 'required',
//         ]);
   
//         if(Auth()->attempt(array('role_id' => $input['role_id'],'email' => $input['email'], 'password' => $input['password'])))
//         {
//             if (Auth()->user()->role_id == 1) {
//                 return redirect()->route('hr');
//             }
//             elseif (Auth()->user()->role_id == 2) {
//                 return redirect()->route('hm');
//             }
//             elseif (Auth()->user()->role_id == 3) {
//                 return redirect()->route('employee');
//             } 
            
//         }else{
//             return redirect()->route('login')
//                 ->with('error','Email-Address And Password Are Wrong..');
//         }
          
//     }
// }