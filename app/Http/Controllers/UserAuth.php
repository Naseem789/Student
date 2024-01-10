<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\UserAuthController;

class UserAuthController extends Controller
{
    public function login()
    { 
        return view('login', ['title' => 'Login :: Student Book Center']);
    }

    public function Register()
    {
        return view('register', ['title' => 'Register :: Student Book Center']);
    }
}
