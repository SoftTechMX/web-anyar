<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PreguntaFrecuente;

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
        $preguntas_frecuentes = PreguntaFrecuente::take(5)->get();

        return view('page.landing')
            ->with('preguntas_frecuentes', $preguntas_frecuentes);
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
