<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()

    {
       return view('admin.login');
    }

    public function forgot()
    {
        return view('admin.forgot');
    }

    public function reset()
    {
        return view('admin.reset');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
        'email'=> 'required|email',
        'password'=> 'required'
        
        ]);

        return view('admin');   
    }
    
}

