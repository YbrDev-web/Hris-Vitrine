<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class FeedController extends Controller
{
    // Stocke le flux RSS
    public function store(Request $request)
    {
        $request->validate([
            'feed_name' => 'required|string|max:255',
            'feed_url' => 'required|url|max:500',
        ]);

        Feed::create([
            'name' => $request->feed_name,
            'url' => $request->feed_url,
        ]);

        return redirect()->back()->with('success', 'Flux RSS ajouté avec succès !');
    }

    // Récupère et retourne les articles
    public static function getArticles()
    {
        $feeds = Feed::all();
        $articles = [];

        foreach ($feeds as $feed) {
            try {
                $xml = simplexml_load_file($feed->url, 'SimpleXMLElement', LIBXML_NOCDATA);
                foreach ($xml->channel->item as $item) {
                    $articles[] = [
                        'title' => (string) $item->title,
                        'link' => (string) $item->link,
                        'description' => (string) $item->description,
                        'date' => date('d/m/Y', strtotime((string) $item->pubDate)),
                        'source' => $feed->name
                    ];
                }
            } catch (\Exception $e) {
                // Ignorer les flux invalides
                continue;
            }
        }

        // Trier par date décroissante
        usort($articles, function($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return $articles;
    }
}
