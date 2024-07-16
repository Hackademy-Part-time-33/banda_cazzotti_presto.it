<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class PageController extends Controller
{
    public function homepage( Category $category) {
       
      $category = Category::all();
        $articles = Article::where('is_accepted' , true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('homepage', compact('articles', 'category'));
    }

    public function about() {
        return view('about');
    }
    public function contacts() {
        return view('contacts');
    }

    public function setLanguage($lang){

        session()->put('locale' , $lang);
        return redirect()->back();
    }

}
