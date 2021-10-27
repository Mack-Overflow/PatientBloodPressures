<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Video;
  
class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $redirectTo = '/';
    protected function redirectTo()
    {
        return redirect()->intended(route('home'));
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    // public function username()
    // {
    //     $login = request()->input('identity');

    //     $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    //     request()->merge([$field => $login]);

    //     return $field;
    // }
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {   
        $input = $request->all();
  
        $request->validate($request, [
            // 'username' => 'required'
            'email' => 'required',
            'password' => 'required',
        ]);
  
        // $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL);
        // if(auth()->attempt(array($request => $input['email'], 'password' => $input['password'])))
        // {
        //     return redirect()->route('home');
        // }else{
        //     return redirect()->route('login')
        //         ->with('error','Email-Address And Password Are Wrong.');
        // }
          
    }
}