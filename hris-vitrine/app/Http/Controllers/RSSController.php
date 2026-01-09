<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Feeds;

class Controller extends Controller
{
    public function index()
    {
        // 🔗 Flux RSS (tu peux en ajouter d'autres)
        $rssFeeds = [
            'Workday' => 'https://blog.workday.com/en-us/rss.xml',
            'Deloitte' => 'https://www.deloitte.com/global/en/insights/rss-feed.html',
        ];

        $articles = [];

        foreach ($rssFeeds as $source => $url) {
            try {
                $feed = Feeds::make($url);
                foreach ($feed->get_items(0, 5) as $item) {
                    $articles[] = [
                        'title' => $item->get_title(),
                        'link' => $item->get_permalink(),
                        'description' => strip_tags($item->get_description()),
                        'date' => $item->get_date('Y-m-d'),
                        'source' => $source,
                    ];
                }
            } catch (\Exception $e) {
                // En cas d’erreur (RSS cassé, timeout, etc.)
                continue;
            }
        }

        // Trie les articles du plus récent au plus ancien
        usort($articles, fn($a, $b) => strtotime($b['date']) - strtotime($a['date']));

        return view('rss.index', compact('articles'));
    }
}
