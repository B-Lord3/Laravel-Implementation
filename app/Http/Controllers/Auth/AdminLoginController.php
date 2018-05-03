<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showAdminLoginForm() 
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request) 
    {
    	// Validate the form 
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	// Attempt to login the admin
    	if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) 
		{

    		// If successful, redirect to intended destination
    		return redirect()->intended(route('admin'));
    	}

    	// If fail, redirect back to login
    	return redirect()->back()->withInput($request->only('email','remember'));
    }
}
