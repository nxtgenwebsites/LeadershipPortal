<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\User;

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
    protected $redirectTo = '/home';
    protected $maxAttempts = 5; // Default is 5
    protected $decayMinutes = 2; // Default is 1

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'),['lock'=>'No']);
    }

    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );
        
        $user = User::where('email', $request->email)->first();
        
        if ($user){
            $user->lock = 'Yes';
            $user->save();
        }
        return redirect()->route('unlock');
    }
    
    protected function sendFailedLoginResponse(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ( $user->lock == "Yes" ) {
                session()->flash('error','Your Account is locked kindly unlock it by filling the form below');
                return redirect()->route('unlock');
            }
        }
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
    
    protected function authenticated(Request $request, $user)
    {
        if($user->lock == 'Yes') {
            
            $this->guard()->logout();

            $request->session()->invalidate();
        
            session()->flash('error','Your Account is locked kindly unlock it by filling the form below');
                return redirect()->route('unlock');
        }
    }
}
