<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('news-and-events');
    }

    public function create()
    {
    }

    public function edit()
    {
    }
}
