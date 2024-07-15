<x-main>
    <div class="container-fluid pt-2">
        <div class='row'>
            <div class="col-3 mx-auto">
                <div class="rounded shadow bg-body-secondary ">
                    <h1 class="text-center fw-bold ">
                        Revisor Dashboard !
                    </h1>
                </div>
            </div>
        </div>
    </div>
    
    @if ($article_to_check->image && $article_to_check->image->count())

    @foreach ($article_to_check->images as $key->image)
    <div class="col-6 col-md-4 mb-4 text-center">
        <img src="{{ Storage::url($image->path) }}" class="img-fluid rounded shadow d-block w-75"
        alt="Immagine {{$key + 1}} dell'articolo {{$article_to_check->title}}">
    </div>
    @endforeach
    
    <div id="carouselExampleIndicators" class="carousel slide mt-5">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            
            @for ($i = 1; $i < 6; $i++)
            <div class="carousel-item @if ($i == 1) active
                
            @endif">
                <div class="col-6 col-md-4 mb-4 text-center">
                    <img src="{{ asset("immagini-progetto/prodotto$i.webp") }}" class="img-fluid rounded shadow d-block w-75"
                    alt="immaginesegna">
                </div>
            </div>
            @endfor
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 ps-4 d-flex flex-column justify-content-between mt-5 ">
            <div>
                <h1>{{ $article_to_check->title }}</h1>
                <h3>Autore: {{ $article_to_check->user->name }}</h3>
                <h4>{{ $article_to_check->price }}£</h4>
                <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
                <p class="h6"> {{ $article_to_check->description }}</p>
            </div>
            
            <div class="d-flex pb-4 justify-cointent-around ">
                <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-2 px-5 fw-bold m-2">Rifiuta</button>
                </form>
                
                <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-2 px-5 fw-bold m-2">Accetta</button>
                </form>
            </div>
        </div>
    </div>
    @else
    <div class="row justify-content-center align-items-center height-custom text-center">
        
        <div class="col-12">
            <h1 class="fst-italic display-4">
                Nessun articolo da revisionare
            </h1>
            <a href="{{ route('homepage') }}" class="mt-5 btn btn-success">Torna alla Homepage</a>
        </div>
        
    </div>
    @endif
</div>

</x-main>
