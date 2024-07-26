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
        $articles = Article::with('category')->paginate(10);

        return view('layout.app', compact('categories', 'articles'));
    }
    public function contact()
    {
        $categories = Category::all(); 
        $articles = Article::with('category')->paginate(10);

        return view('contact', compact('categories', 'articles'));
    }

}
