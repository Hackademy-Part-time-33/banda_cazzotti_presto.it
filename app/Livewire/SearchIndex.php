<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

 


class SearchIndex extends Component
{
    use WithPagination;
    public $Direction= 'asc'; 
    
    public $priceOrTitle='created_at';
    public $paginateNumber = 10;
    public $paginateNumberTotal = 10;
    public bool $firstPaginate=true;
    public $price;
    public $query;
    public $priceMax;
    public $categoriesChecked = [];
    public bool $canLoadMore;

    public function order(){
        
        if($this->Direction=='asc'){
            $this->Direction='desc';
        }
        else{
            $this->Direction='asc';
        }
    }
   


    public function resetpage()
    {
        
        $this->firstPaginate=true;
    }
public function mount(){
    $this->priceMax=(int)(DB::table('articles')->max('price'))+1;
    $this->price=$this->priceMax;
    // dd($this->price);
}
    public function loadMore()
    {
        if(!$this->canLoadMore){
            return null;
        }
        if($this->firstPaginate){
            $this->paginateNumberTotal=$this->paginateNumber;
             $this->firstPaginate=false;
         }
        $this->paginateNumberTotal+= $this->paginateNumber ;
    }
    public function render()
    {
        if($this->firstPaginate){
            $this->paginateNumberTotal=$this->paginateNumber;
            
         }
        // dump($this->categoriesChecked);
        if ($this->paginateNumber > 25) {
            $this->paginateNumber = 25;
        }
        $query = $this->query;
        if($query==''){
            if($this->priceOrTitle==''){
                 $preArticles = Article::where('is_accepted' , true)->get();
                 
            }
            else{
                $preArticles = Article::where('is_accepted' , true)->
                 orderBy($this->priceOrTitle,$this->Direction)
                 ->get();
            }
          
        }
        else {
            if($this->priceOrTitle==''){
            $preArticles = Article::search($query)->where('is_accepted' , true)->get();
            }
            else{
                $preArticles = Article::search($query)->where('is_accepted' , true)->orderBy($this->priceOrTitle,$this->Direction)->get();
            }
        }

        // dump($preArticles);
         $articles = collect([]);
        //  $articles = [];

        foreach ($preArticles as $preArticle) {
            if ($preArticle->price <= $this->price) {
                if(!$this->categoriesChecked||in_array($preArticle->category_id,$this->categoriesChecked)){
                    // dump($preArticle->category_id);
                // $articles[] = $preArticle;
                $articles = $articles->concat([$preArticle]);
                // dump($articles);
                }
                
            }
        }
        // $articlesP= new LengthAwarePaginator($articles,count($articles),$this->paginateNumber);
        // $articlesP= new Paginator($articles,$this->paginateNumber);
        // $articles = collect([$articles]);
        // dump($articles);
        // $articles->paginate($this->paginateNumber);
        $articles=$articles->take($this->paginateNumberTotal);
        $this->canLoadMore=count( $articles)>= $this->paginateNumberTotal;
        
        // $articles = $articles->where('price','<', $this->price)->paginate($this->paginateNumber);
        // $articles =$articles->paginate($this->paginateNumber);
        return view('livewire.search-index', ['articles' => $articles]);
    }
}
