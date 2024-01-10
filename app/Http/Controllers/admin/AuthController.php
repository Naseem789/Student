<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(){
        return view('admin/login', ['title' => 'Login :: Student Book Center']);
    }

    public function register(){
        return view('admin/register', ['title'=>'Register :: Student Book Center']);
    }
}
