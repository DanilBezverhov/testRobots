<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        $categories = Category::withCount('articles')->get();

        return view('articles.index', compact('articles', 'categories'));
    }

    public function show($categorySlug, $articleSlug)
    {
        $articles = Article::where('slug', $articleSlug)->first();
        $categories = Category::withCount('articles')->get();
        if (is_null($articles)) {
            abort(404, 'Article not found');
        }
        
        return view('articles.show', compact('articles', 'categories'));
    }
}
