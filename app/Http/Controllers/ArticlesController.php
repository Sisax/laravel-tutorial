<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    function index() {
        return view('articles.index', ['articles' => Article::take(3)->latest()->get()]);
    }

    function show(Article $article) {
        return view('articles.show', ['article' => $article]);
    }

    function create() {
        return view('articles.create');
    }

    function store() {
        Article::create($this -> validateArticle());
        
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
            'body' => 'required'
        ]);
    }
}
