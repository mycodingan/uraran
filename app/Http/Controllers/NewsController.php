<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index(Request $request)
{
    try {
        $apiKey = '0457c2c54fab4f7b974cb409d39ae3c1';

        $searchTerm = $request->input('cari');
        $datefrom = $request->input('from');
        $dateto = $request->input('to');

        $endpoint = "https://newsapi.org/v2/everything?apiKey=$apiKey";
        if ($searchTerm) {
            $endpoint .= "&q=$searchTerm";
        }
        if ($datefrom) {
            $endpoint .= "&from=$datefrom";
        }

        if ($dateto) {
            $endpoint .= "&to=$dateto";
        }

        $response = Http::get($endpoint);

        if (!isset($response->json()['articles'])) {
            throw new \Exception('Invalid API response. Missing "articles" key.');
        }

        $articles = $response->json()['articles'];

        $articles = array_map(function ($article) {
            $article['publishedAt'] = isset($article['publishedAt']) ? \Carbon\Carbon::parse($article['publishedAt'])->format('Y-m-d H:i:s') : null;
            return $article;
        }, $articles);

        return view('news', compact('articles', 'searchTerm'));
    } catch (\Exception $e) {
        return response()->view('error', ['error' => $e->getMessage()], 500);
    }
}

}
