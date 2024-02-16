<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
    public function index() {
        return view('frontend.home');
    }

    public function login() {
        return view('frontend.login');
    }

    public function signup() {
        return view('frontend.sign-up');
    }
    
    public function contact() {
        return view('frontend.contact');
    }

    public function about() {
        return view('frontend.about');
    }
    
}
