<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $data_artikel = Article::all();
        return view('news-and-events', compact('data_artikel'));
    }
}
