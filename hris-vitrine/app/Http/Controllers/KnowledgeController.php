<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;

class KnowledgeController extends Controller
{
    public function index()
    {
        // ✅ Exemple : flux RSS Workday Community ou un blog RH
        $feedUrl = 'https://blog.workday.com/en-us/rss.xml';

        // ✅ Lecture du flux
        $feed = FeedReader::read($feedUrl);

        // ✅ Transformation des données
        $articles = collect($feed->get_items())->map(function ($item) {
            return [
                'title' => $item->get_title(),
                'link' => $item->get_link(),
                'desc' => strip_tags($item->get_description()),
                'img' => $this->extractImage($item->get_description()) ?? 'https://source.unsplash.com/random/800x400?business,office',
                'date' => $item->get_date('Y-m-d'),
            ];
        });

        return view('knowledge', compact('articles'));
    }

    // 🔧 Fonction utilitaire pour extraire une image du flux
    private function extractImage($html)
    {
        if (preg_match('/<img.*?src=["\'](.*?)["\']/', $html, $matches)) {
            return $matches[1];
        }
        return null;
    }
}
