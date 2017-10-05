<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\User;

class PagesController extends Controller
{
    public function profile(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $user->update($request->all());
        return view('pages.profile', compact('user'));
    }

    public function homepage()
    {
        $articles = Article::homepage()->get();
        return view('home.home', compact('articles'));
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
}
