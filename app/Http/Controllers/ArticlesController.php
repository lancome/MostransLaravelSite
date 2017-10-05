<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit', 'destroy', 'update']]);
    }

    public function index()
    {
        $articles = Article::latest('published_at')->published()->nothomepage()->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function store(ArticleRequest $request)
    {
//        Adding to array second options

//        $name = $request->all();
//        $name['user_id'] = 1;
//        $name['article_category_id'] = 1;

//        $name = array_add($name, 'user_id', 1);
//        $name = array_add($name, 'article_category_id', 1);
//        $name = array_add($name, 'published_at', Carbon::now());

//        $request->merge([
//            'user_id' => 1,
//            'article_category_id'=>1
//        ]);

//        Validation second option

//        $this->validate($request, [
//            'title' => 'required|min:3',
//            'content' => 'required',
//            'published_at' => 'required|date',
//        ]);

//        Article::create($request->all());

//        $article = new Article($request->all());
        Auth::user()->articles()->create($request->all());
        session()->flash('flash_message', 'Article has been created!');
        return redirect('articles');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
//        dd($article->published_at);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        if (Auth::user()->admin==false){
            return view('user.articles.create', compact('article'));
        }
        if (Auth::user()->admin){
            return view('admin.articles.create');
        }
        else {
            session()->flash('flash_error', 'You have no permissions for editing this article!');
            return redirect('articles');
        }

    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        if ($article->user_id == Auth::user()->id){
            return view('user.articles.edit', compact('article'));
        }
        else if (Auth::user()->admin){
            return view('admin.articles.edit', compact('article'));
        }
        else {
            session()->flash('flash_error', 'You have no permissions for editing this article!');
            return redirect('articles');
        }

    }


    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        session()->flash('flash_message', 'Article updated!');
        return redirect('articles');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        session()->flash('flash_message', 'Article deleted!');
        return redirect('articles');
    }
}
