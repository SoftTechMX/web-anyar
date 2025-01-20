<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landing()
    {
        return view('page.landing');
    }

    public function details()
    {
        return view('page.details');
    }

    public function blog()
    {
        return view('page.blog');
    }

    public function blog_single()
    {
        return view('page.blog-single');
    }
}
