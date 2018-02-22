<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Mail;
use App\User;
use Illuminate\Http\Request;
use function foo\func;
use Illuminate\Support\Facades\App;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function showEmail(){
    	return view('auth.emailSenha');
    }
    
    public function enviaEmail(Request $request)
    {
    	$user = new \App\User();
    	$user->email =  $request->input('email');
        $token = $user->getDtUsers('remember_token');
    	dd($token);
    
    }
}
