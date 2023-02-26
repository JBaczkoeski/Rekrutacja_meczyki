<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserArticleController extends Controller
{
    public function show($articles_id)
    {
        $articles_user= DB::table('articles')->where('user_id', $articles_id)->get();

        return view('Article.userArticle', compact('articles_user'));
    }
}
