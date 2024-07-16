<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class AnimeController extends Controller
{
    public function genres()
    {
        $url = 'https://api.jikan.moe/v4/genres/anime';

        $response = Http::get($url)->json();

        return view('anime.genres', ['genres' => $response['data']]);
    }

    public function animeByGenre($genre_id)
    {
        // $url = 'https://api.jikan.moe/v4/anime?genres=' . $genre_id;
        $url = 'https://api.jikan.moe/v4/anime';

        $response = Http::get($url, ['genres' => $genre_id])->json();

        $data = Arr::map($response['data'], function ($item) {

            return [
                'id' => $item['mal_id'],
                'title' => $item['title'],
                'year' => $item['year'],
                'score' => $item['score'],
                'image' => $item['images']['jpg']['image_url'],
            ];

        });

        return view('anime.by_genre', ['anime' => $data]);
    }


    public function animeById($anime_id)
    {
        $url = 'https://api.jikan.moe/v4/anime/' . $anime_id;

        $response = Http::get($url)->json();

        return view('anime.by_id', ['anime' => $response['data']]);
    }
}
