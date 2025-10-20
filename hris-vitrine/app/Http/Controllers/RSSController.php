<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Article;

class RSSController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(10)->get();

        $rssFeed = view('rss.feed', compact('articles'));

        return response($rssFeed, 200)
            ->header('Content-Type', 'application/rss+xml');
    }
}
