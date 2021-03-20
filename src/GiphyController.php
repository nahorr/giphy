<?php

namespace Nahorr\Giphy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class GiphyController extends Controller
{
    public function search(Request $request)
    {
        $param = $request->search_param === null ? "search":$request->search_param;
        $search = $request->search === null ? "anything":$request->search;

        $url = "https://api.giphy.com/v1/gifs/".$param."?q=".$search."&api_key=L91BK0N9LrcfxpYMyeDXqJoPrWzKjiJS";

        $response = Http::get($url)->json();

        $data = collect($response)->first();

        return view('giphy::search', compact('param', 'search', 'data'));
    }



}
