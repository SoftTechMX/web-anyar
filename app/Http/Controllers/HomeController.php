<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

use App\Models\FrequentlyAskedQuestion;

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
        $faqs = Cache::remember('frequently_asked_questions', now()->addMinutes(30), function () {
            return FrequentlyAskedQuestion::take(5)->get();
        });

        return view('page.landing')
            ->with('faqs', $faqs);
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

    public function buy()
    {
        return view('page.buy');
    }
}
