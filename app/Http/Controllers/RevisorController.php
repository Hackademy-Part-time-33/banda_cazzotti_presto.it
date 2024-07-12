<?php

namespace App\Http\Controllers;
use App\Mail\BecomeRevisor;
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
        $article_to_check = Article::where('is_accepted', null)->orderBy('created_at', 'desc')->whereNot('user_id', auth()->user()->id)->first();
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

    public function deleteOperation(Article $article) 
    {
        $article->setAccepted(null);
        return redirect()
        ->back()
        ->with('message', "Hai eliminato la tua operazione precedente $article->title");
    }
    
    public function becomeRevisor(Request $request)
    {
        Mail::to('armentielia@gmail.com')->send(new BecomeRevisor(Auth::user(), $request->message));
        return redirect()->route('homepage')->with('message', 'Complimenti, hai richiesto di diventare un revisore!');
    }
    
    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor' , ['email' => $user->email]);
        return redirect()->back();
    }
    
    public function showWork()
    {
        return view('lavora-con-noi');
    }
    
}
