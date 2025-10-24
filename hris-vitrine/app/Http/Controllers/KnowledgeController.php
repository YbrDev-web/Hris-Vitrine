<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [];

        $feeds = [
            'https://blog.workday.com/en-us/rss.xml',
            'https://www2.deloitte.com/fr/fr/pages/human-capital/topics/flux-rss.html',
        ];

        foreach ($feeds as $feed) {
            $xml = simplexml_load_file($feed);
            foreach ($xml->channel->item as $item) {
                $articles[] = [
                    'title' => (string) $item->title,
                    'link' => (string) $item->link,
                    'description' => strip_tags((string) $item->description),
                    'pubDate' => (string) $item->pubDate,
                ];
            }
        }

        return view('articles', compact('articles'));
    }
}
