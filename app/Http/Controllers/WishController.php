<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishController extends Controller
{
    public function index()
    {
        return view('wish', ['title' => 'Wish List :: Student Book Center']);
    }
}
