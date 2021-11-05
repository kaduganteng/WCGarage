<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
