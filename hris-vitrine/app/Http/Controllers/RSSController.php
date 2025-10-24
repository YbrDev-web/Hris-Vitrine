<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;

class RssController extends Controller
{
    public function index()
    {
        // URLs des flux RSS Workday & Deloitte
        $feeds = [
            'Workday' => 'https://blog.workday.com/en-us/rss.xml',
            'Deloitte' => 'https://www2.deloitte.com/global/en/rss-feeds/press-releases.xml',
        ];

        $articles = [];

        foreach ($feeds as $source => $url) {
            try {
                $response = Http::get($url);

                if ($response->ok()) {
                    $xml = new SimpleXMLElement($response->body());

                    foreach ($xml->channel->item as $item) {
                        $articles[] = [
                            'source' => $source,
                            'title' => (string) $item->title,
                            'link' => (string) $item->link,
                            'date' => date('d/m/Y', strtotime($item->pubDate)),
                            'description' => strip_tags((string) $item->description),
                        ];
                    }
                }
            } catch (\Exception $e) {
                continue;
            }
        }

        // Tri du plus récent au plus ancien
        usort($articles, fn($a, $b) => strtotime($b['date']) - strtotime($a['date']));

        return view('articles.index', compact('articles'));
    }
}
