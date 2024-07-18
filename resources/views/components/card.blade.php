<div>
    <div class="card mx-auto shadow text-center {{-- m-4 --}}" style="width: {{$width ?? 20}}rem; height : {{$height ?? 400}}px">
        <img src="{{$article->images->isNotEmpty()? $article->images->first()->getUrl(600,550):asset("LogoLegoNavbar.png")}}" class="card-img-top @if(!$article->images->isNotEmpty()) bg-danger p-3 @else  @endif" alt="Immagine dell'articolo {{$article->title}}" >
        <div class="card-body">
            <h4 class="card-title" >{{Str::limit($article->title, $limit ?? 15) }}</h4>
            <h6 class="card-subtitle ">{{ Str::replace('.', ',', sprintf("%.2f", $article->price))}} €</h6>
            <div class="d-flex justify-content-evenly align-items-center mt-4">
                <a href="{{route('articles.show', compact('article'))}}" class="btn custom-button me-2">Dettaglio</a>
                <a href="{{route('byCategory', ['category'=>$article->category])}}" class="btn custom-button @if (request()->routeIs('byCategory')) disabled @endif" >{{$article->category->name}}</a>
            </div>
        </div>
    </div>
</div>