<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showHome()
    {
    	return view('/');
    }

    public function showLogin()
    {
    	return view('login');
    }

    public function showSignup()
    {
    	return view('signup');
    }

    public function showCart()
    {
    	return view('cart');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showThanks()
    {
    	return view('thanks');
    }

}
