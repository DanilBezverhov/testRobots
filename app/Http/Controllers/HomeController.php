<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;


class HomeController extends Controller
{
  
    public function index()
    {
        $categories = Category::all(); 
        $articles = Article::with('category')->get();

        return view('layout.app', compact('categories', 'articles'));
    }

}
