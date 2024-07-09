<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Mail\WorkWithUs;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;


class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }
    
    public function accept(Article $article)
    {
        $article->setAccepted(true);
        return redirect()
        ->back()
        ->with('message', "Hai accettato l'articolo $article->title");
    }
    
    public function reject(Article $article)
    {
        $article->setAccepted(false);
        return redirect()
        ->back()
        ->with('message', "Hai rifiutato l'articolo $article->title");
    }
    
    public function becomeRevisor()
    {
        Mail::to('armentielia@gmail.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('message', 'Complimenti, hai richiesto di diventare un revisore!');
    }
    
    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor' , ['email' => $user->email]);
        return redirect()->back();
    }
    
    public function workWithUs()
    {
        return view('lavora-con-noi');
    }
    
    public function workWithUsSend() 
    {
        return view('lavora-con-noi-invia');
        Mail::to('armentielia@gmail.com')->send(new WorkWithUs(Auth::user()));
        return redirect()->route('homepage')->with('message', 'Complimenti, hai richiesto di lavorare con noi!');
    }
}
