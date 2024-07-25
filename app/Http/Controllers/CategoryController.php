<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $articles = $category->articles()->paginate(10);
        $categories = Category::withCount('articles')->get();
        return view('layout.app', compact('articles', 'categories', 'category'));
    }
    
}