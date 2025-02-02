<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Models\FrequentlyAskedQuestion;
use App\Models\Person;

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
        $team = Person::take(4)->get();

        $faqs = Cache::remember('frequently_asked_questions', now()->addMinutes(30), function () {
            return FrequentlyAskedQuestion::take(5)->get();
        });

        return view('page.landing')
            ->with('team', $team    )
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

    public function plans()
    {
        return view('page.plans');
    }

    public function buy()
    {
        return view('page.buy');
    }

    public function user_profile()
    {
        if( !Auth::check() )
        {
            return Redirect::back();
        }

        $user = Auth::user();

        return view('page.user.profile')
            ->with('user', $user);
    }

    public function user_settings()
    {
        if( !Auth::check() )
        {
            return Redirect::back();
        }

        $user = Auth::user();

        return view('page.user.settings')
            ->with('user', $user);
    }

    public function dashboard()
    {
        if( !Auth::check() )
        {
            return Redirect::back();
        }

        $user = Auth::user();

        return view('page.dashboard');
    }

    public function cpanel()
    {
        if( !Auth::check() )
        {
            return Redirect::back();
        }

        $user = Auth::user();

        return view('page.cpanel');
    }

    public function version()
    {
        return view('page.version');
    }
}
