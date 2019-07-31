<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function authenticated(){

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    $administrador=\Auth::user()->admin;
    if ($administrador==false){
        return redirect('/');
    }
    if ($administrador==true){ //aqui tá o meu 0
        return redirect('/adm');
    }

    //protected $redirectTo = '/agregarProductos';
}

    //protected $redirectTo2 = '/productos';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {

        $this->middleware('guest')->except('logout');
        return redirect('/');
    }
}
