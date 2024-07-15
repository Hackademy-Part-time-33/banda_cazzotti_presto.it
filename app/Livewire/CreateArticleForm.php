<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticleForm extends Component
{
    use WithFileUploads;
    public $images = [];
    public $temporary_images;

    #[Validate('required', message: 'Per favore inserisci un titolo.')]
    #[Validate('min:5', message: 'il titolo è troppo corto (minimo 5 caratteri).')]
    #[Validate('max:254', message: 'il titolo è troppo lungo (massimo 254 caratteri).')]
    public $title;
    #[Validate('required', message: 'Per favore inserisci una descrizione.')]
    #[Validate('min:10', message: 'La descrizione è troppo corta (minimo 10 caratteri).')]
    #[Validate('max:1000000', message: 'Spiacente il testo è troppo lungo')]
    public $description;
    #[Validate('required', message: 'Per favore inserisci una prezzo, per i decimali usa il punto.')]
    #[Validate('numeric', message: 'Il prezzo deve essere un numero, per i decimali usa il punto.')]
    #[Validate('max:1000', message: 'il prezzo non può essere maggiore di 1000€.')]
    public $price;
    #[Validate('required', message: 'Per favore scegli una categoria.')]
    public $category;
    public $article;

    public function store()
    {
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);
        session()->flash('success', 'Articolo creato correttamente');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.create-article-form');
    }

}
