<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class RangkingController extends Controller
{
    public function ranking()
    {
        $articles_ranking = DB::table('articles')->select('author')->selectRaw('count(author) as cnt')->groupBy('author')->orderBy('cnt')->take(3)->get();

        return view('Article.ranking', compact('articles_ranking'));
    }
}
