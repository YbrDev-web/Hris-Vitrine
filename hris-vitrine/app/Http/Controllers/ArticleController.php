<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FeedController;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = FeedController::getArticles();

        return view('article', compact('articles'));
    }
}
