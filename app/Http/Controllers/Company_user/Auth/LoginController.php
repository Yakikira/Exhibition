<?php

namespace App\Http\Controllers\Company_user\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::Company_user_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:company_user')->except('logout');
    }
    
    //Guardの認証方法を指定
    protected function guard()
    {
        return Auth::guard('company_user');
    }
    
    //ログイン画面
    public function showLoginForm(){
        return view('company_user.auth.login');
    } 
    
    //ログアウト処理
    public function logout(Request $request){
        Auth::guard('company_user')->logout();
        return $this->loggedOut($request);
    }
    
    //ログアウトした時のリダイレクト先
    public function loggedOut(Request $request){
        return redirect(route('company_user.login'));
    }
}
