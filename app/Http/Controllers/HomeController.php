<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return Response
     */

    public function index()
    {

//        dd(Article::where('homepage', '=', 1)->get());
        $articles = Article::where('homepage', '=', 1)->get();
        return view('home.home', compact('articles'));
//        return view('home.home');
    }
}
