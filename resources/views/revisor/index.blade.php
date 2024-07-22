<x-main>
    <div class="container-fluid pt-2">
        <div class='row'>
            <div class="col-12 col-md-3 mx-auto">
                <div class="rounded shadow bg-body-secondary ">
                    <h1 class="text-center fw-bold ">
                        Revisor Dashboard !
                    </h1>
                </div>
            </div>
        </div>
    </div>
    {{--     -----------carosello --}}
    
    
    
    
    @if ($article_to_check)
    <div class="row mt-5">
        <div class="col-12 col-md-5">
            <div id="carouselExample" class="carousel slide  border border-danger border-5 overflow-x-hidden" >
                <div class="carousel-innerr">
                    @if ($article_to_check->images->count())
                    
                    @foreach ($article_to_check->images as $key=>$image)
                    
                    <div class="carousel-item  @if ($loop->first) active @endif" id="carousel1">                                           
                        
                        <div class="w-100 h-100  d-flex justify-content-center align-items-center">
                            <img src="{{ $image->getUrl(500,500) }}" {{-- class="img-fluid rounded shadow d-block w-75" --}}
                            alt="Immagine {{$key + 1}} dell'a   
                            rticolo {{$article_to_check->title}}">
                        </div>
                        
                        <div class="col-md-8 ps-3">
                            <div class="card-body">
                                <h5 class="">Ratings</h5>

                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->adult}}">
                                        </div>
                                    </div>
                                    <div class="col-10">adult</div>
                                </div>

                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->violence}}">
                                                </div>    
                                            </div>
                                            <div class="col-10"> violence</div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->spoof}}">
                                                </div>    
                                            </div>
                                            <div class="col-10"> spoof</div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->racy}}">
                                                </div>    
                                            </div>
                                            <div class="col-10">racy</div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="text-center mx-auto {{ $image->medical}}">
                                                </div>    
                                            </div>
                                            <div class="col-10">medical</div>
                                        </div>    
                                    </div>    
                                </div>                                
                            </div>    
                        </div>
                        @endforeach
                        @else
                        @for ($i = 1; $i < 6; $i++)
                        
                        <div class="carousel-item    @if($i==1) active @endif "  id="carousel1">
                            <div class="w-100 h-100  d-flex justify-content-center align-items-center">
                                <img src="{{ asset("immagini-progetto/prodotto$i.webp") }}" class=" rounded shadow "  alt="immaginesegna" >
                            </div>
                        </div>
                        @endfor
                        @endif
                        
                        
                        
                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                        <span class="text-warning fs-1 font-bold "><</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                        <span class="text-warning fs-1 font-bold ">></span>
                    </button>
                </div>
            </div>
            
            {{--  -------------fineCarosello --}}
            
            
            <div class="col-12 col-md-5 d-flex justify-content-center">
                <div class=" ps-4 d-flex flex-column justify-content-between mt-5 ">
                    <div>
                        <h1 class="revisiona">{{ $article_to_check->title }}</h1>
                        <h3 class="revisiona"> Autore: {{ $article_to_check->user->name }}</h3>
                        <h4 class="revisiona">{{ $article_to_check->price }}€</h4>
                        <h4 class="fst-italic text-muted revisiona">#{{ $article_to_check->category->name }}</h4>
                        <p class="h6 revisiona"> {{ $article_to_check->description }}</p>
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
    </div>
    
</x-main>