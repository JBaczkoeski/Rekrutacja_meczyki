<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::All();

        return view('Article.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'user_id' => 'required',
        ]);

        Article::create($request->post());

        return redirect()->route('articles.index')
            ->with('success', 'Article created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('Article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('Article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'user_id' => 'required',
        ]);

        $article->fill($request->post())->save();

        return redirect()->route('Article.articles')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success','Company Has Been deleted successfully');
    }
}
