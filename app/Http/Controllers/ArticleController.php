<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Mail;
use App\Mail\Infomail;
use App\Models\User;
use Illuminate\Routing\Middleware\ValidateSignature;
use Illuminate\Console\View\Components\Info;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller implements HasMiddleware
{
    /**
    * Display a listing of the resource.
    */
    public static function middleware():array
    {
        return [new Middleware('verified', only: ['create'])];
    } 
    public function index()
    {
        if (Auth::check()) {
            
            if (auth()->user()->is_revisor) {
                $articles= Article::where('is_accepted', true)->orWhere('is_accepted', false)->orderBy('created_at', 'desc')->paginate(6);
                
            }else{
                $articles= Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
            }
            
        }
        else {
            $articles= Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        }
        
        return view('articles.index', compact('articles'));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('articles.create');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(StoreArticleRequest $request)
    {
        $data = [
            "firstname" => $request->name,
            "lastname" => $request->lastname,
            "email" => $request->email,
            "message" => $request->message,
        ];
        
        Mail::to($request->email)->send(new Infomail($data));
        return redirect()->route('homepage')->with('Success', 'Mail Inviata con successo!');
    }
    
    /**
    * Display the specified resource.
    */
    public function show(Article $article)
    {
        
        return view('articles.show', compact('article'));
        
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Article $article)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Article $article)
    {
        //
    }
    
    public function byCategory(Category $category)
    {
        $articles = $category->articles->where('is_accepted', true);
        return view('articles.byCategory',compact('articles','category'));
    }
    
    public function byUser(User $user)
    {
        if (!$user) {
            abort(404, 'Utente non trovato');
        }
        
        $articles = $user->articles->where('is_accepted', true);
        return view('articles.byUser', compact('articles', 'user'));
    }
    
    public function searchArticles(Request $request)
    {
        // dd($request->input('categories'));
        $query= $request->input('query');
        // $price= (int)$request->input('price');
        //     $articles=Article::where('price','<', $price)->get();
        
        //     if($request->input('categories')){
        //        foreach ($request->input('categories') as $category) {
        
        //     $articles->where('category_id',(int)$category);
        
        //   } 
        //     }
        
        //     $articles->search($query);
        
        
        
        
        
        
        
        // $articles = Article::search($query)->where('is_accepted',true)->get();
        // $articles->orderBy('price', 'desc')->get();   
        //  $articles = Article::search($query)->where('price','<', $price)->paginate(10);
        return view('articles.searched',compact('query'));
    }
}
