<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', ['title' => 'Home :: Student Book Center']);
    }

    public function about()
    {
        return view('about', ['title' => 'About :: Student Book Center']);
    }

    public function blog()
    {
        return view('blog', ['title' => 'Blog :: Student Book Center']);
    }
      
    public function services()
    {
        return view('service', ['title' => 'Services :: Student Book Center']);
    }

    public function contact()
    {
        return view('contact', ['title' => 'Contact :: Student Book Center']);
    }

    public function shop()
    {
        return view('shop', ['title' => 'Shop :: Student Book Center']);
    }
}
