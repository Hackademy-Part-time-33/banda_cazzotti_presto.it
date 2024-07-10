<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class SearchIndex extends Component
{
    use WithPagination;
    public $paginateNumber = 8;
    public $price = 1000;
    public $query;
    public $categoriesChecked = [];


    public function search()
    {
    }
    public function render()
    {
        // dump($this->categoriesChecked);
        if ($this->paginateNumber > 25) {
            $this->paginateNumber = 25;
        }
        $query = $this->query;
        if($query==''){
            $preArticles = Article::all();
        }
        else {
            $preArticles = Article::search($query)->get();
        }
        // dump($preArticles);
        //  $articles = collect([]);
         $articles = [];

        foreach ($preArticles as $preArticle) {
            if ($preArticle->price < $this->price) {
                if(!$this->categoriesChecked||in_array($preArticle->category_id,$this->categoriesChecked)){
                    // dump($preArticle->category_id);
                $articles[] = $preArticle;
                // $articles = $articles->concat([$preArticle]);
                // dump($articles);
                }
                
            }
        }
        $articles=new Paginator($articles,$this->paginateNumber);
        // $articles = collect([$articles]);
        dump($articles);
        // $articles->paginate($this->paginateNumber);

        // $articles = $articles->where('price','<', $this->price)->paginate($this->paginateNumber);
        // $articles =$articles->paginate($this->paginateNumber);
        return view('livewire.search-index', ['articles' => $articles]);
    }
}
