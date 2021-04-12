<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticlesController extends Controller
{
    function index() {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }

        return view('articles.index', ['articles' => $articles]);
    }

    function show(Article $article) {
        return view('articles.show', ['article' => $article]);
    }

    function create() {
        return view('articles.create', [
            'tags' => Tag::get()->all()
        ]);
    }

    function store() {
        $article = new Article($this -> validateArticle());
        $article -> user_id = 1;
        $article -> save();

        $article->tags()->attach(request('tags'));
        
        return redirect('/articles');
    }

    function edit(Article $article) {
        return view('articles.edit', ['article' => $article]);
    }

    function update(Article $article) {
        $article -> update($this -> validateArticle());
        return redirect('/articles/' . $article -> id);
    }

    function validateArticle() {
        return request() -> validate([
            'title' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
