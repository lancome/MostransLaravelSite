<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function homepages()
    {
        $articles = Article::latest('published_at')->published()->homepage()->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function unpublished()
    {
        $articles = Article::latest('published_at')->unpublished()->paginate(5);
        return view('articles.index', compact('articles'));
    }

//    public function create()
//    {
//        return view('admin.articles.create');
//    }
//
//    public function edit($id)
//    {
//        $article = Article::findOrFail($id);
//        return view('admin.articles.edit', compact('article'));
//    }
//
//    public function update(ArticleRequest $request, $id)
//    {
//        $article = Article::findOrFail($id);
//        $article->update($request->all());
//        return redirect('articles');
//    }
//
//    public function destroy($id)
//    {
//        $article = Article::findOrFail($id);
//        $article->delete();
//        return redirect('articles');
//    }
}


