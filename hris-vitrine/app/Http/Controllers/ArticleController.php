<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FeedController;

class ArticleController extends Controller
{
    //fonction permettant d'obtenir les differents flux rss et leurs articles dans la bdd. 
    public function index()
    {
        $articles = FeedController::getArticles();

        return view('article', compact('articles'));
    }
}
