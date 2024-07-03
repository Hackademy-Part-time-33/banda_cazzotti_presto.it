<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class PageController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function about() {
        return view('about');
    }
    public function contacts() {
        return view('contacts');
    }

}
