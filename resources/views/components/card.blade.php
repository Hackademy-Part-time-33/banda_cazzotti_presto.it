<div>
    <div class="card mx-auto shadow text-center {{-- m-4 --}}" style="width: {{$width ?? 20}}rem; height : {{$height ?? 400}}px">
        <img src="{{$article->images->isNotEmpty()? Storage::url($article->images->first()->path):asset("LogoLegoNavbar.png")}}" class="card-img-top p-3" alt="Immagine dell'articolo {{$article->title}}" >
        <div class="card-body">
            <h4 class="card-title">{{$article->title}}</h4>
            <h6 class="card-subtitle ">{{ Str::replace('.', ',', sprintf("%.2f", $article->price))}} €</h6>
            <div class="d-flex justify-content-evenly align-items-center mt-5">
                <a href="{{route('articles.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
                <a href="{{route('byCategory', ['category'=>$article->category])}}" class="btn btn-outline-info ">{{$article->category->name}}</a>
            </div>
        </div>
    </div>
</div>