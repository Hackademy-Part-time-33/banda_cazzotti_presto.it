<div>
    <div class="card mx-auto shadow text-center m-4" style="width: {{$width ?? 20}}rem; height : {{$height ?? 400}}px">
        <img src="{{asset("LogoLegoNavbar.png")}}" class="p-3" alt="Immagine {{$article->title}}" >
        <div class="card-body">
            <h4 class="card-title">{{$article->title}}</h4>
            <h6 class="card-subtitle ">{{$article->price}} €</h6>
            <div class="d-flex justify-content-evenly align-items-center mt-5">
                <a href="{{route('articles.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
                <a href="{{route('byCategory', ['category'=>$article->category])}}" class="btn btn-outline-info">{{$article->category->name}}</a>
            </div>
        </div>
    </div>
</div>