<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
    public function index(){
        return redirect('/articles');
    }

    public function showArticle($id){
        $article = Article::find($id);
        return view('article')->with('article', $article);
    }
}
