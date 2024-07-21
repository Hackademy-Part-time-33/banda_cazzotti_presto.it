<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\Image;

class PageController extends Controller
{
    public function homepage(Article $article, Category $category) {
       $fullArticle=Article::all();
      $category = Category::all();
        $articles = Article::where('is_accepted' , true)->orderBy('created_at', 'desc')->take(6)->get();
        $image=Image::all();
        return view('homepage', compact('articles', 'category', 'fullArticle','image'));
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
