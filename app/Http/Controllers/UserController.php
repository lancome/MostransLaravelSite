<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Article;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function userarticles()
    {
        $articles = Article::where('user_id','=', Auth::user()->id)->paginate(5);
        return view('articles.index', compact('articles'));
    }
}
