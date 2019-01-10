<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::all();
        return  view('articles/index')->with('articles', $articles);
    }

    public function showArticle($id){
        $article = Article::find($id);
        return view('articles/showArticle')->with('article', $article);
    }
    public function create(){
        return view('articles.create');
    }
}
