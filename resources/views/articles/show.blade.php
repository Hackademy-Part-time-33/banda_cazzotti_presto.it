<head>
  @vite(['resources/css/show.css', 'resources/js/show.js'])
  <head>
    
    <x-main>
      
      {{--   CAROSELLO INIZIALE --}}
      <div class="container">
        <div class="row {{-- flex-column flex-lg-row --}}">
          
          
          <div class="col-12 col-lg-7 mt-5 mt-lg-0 d-flex justify-content-center">
          @if ($article->images->count()>0)
          <div id="carouselExampleIndicators" class="h-100 carousel carousel-dark slide border border-5 border-warning ">
           {{--  <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> --}}
            
            <div class="carousel-inner  w-100 h-100">
            @foreach ($article->images as $key=>$image)
    <div class="carousel-item @if ($loop->first) active @endif">
                  <div class=" d-flex justify-content-center align-items-center">
                    <img src="{{ $image->getUrl(500,500) }}" class="w-100 h-100" id="img-carousel" alt="Immagine {{$key+1}} dell'articolo {{$article->title}}"></div>
                   
                </div>
            @endforeach
              
             
            </div>
            @if ($article->images->count()>1)
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden ">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            @endif
           
          </div>
          @else
          <img src="{{asset('LogoLegoNavbar.png')}}" class="img-fluid" alt="Nessun immagine">
          @endif
        </div>
        <div class="col-12 col-lg-4 flex-fill">
        <div class="{{-- d-flex flex-column --}} m-5">
          <h3>{{$article->title}}</h3>
          <h4 class="fw-bold">{{Str::replace('.', ',', sprintf("%.2f", $article->price))}} €</h4>
          <h5>Descrizione</h5>
          <p>{{$article->description}}</p>
          <p>Categoria: <a href="{{route('byCategory', ['category' => $article->category])}}">{{$article->category->name}}</a></p>
          <p>Autore del prodotto: <a href="{{route('byUser',['user'=>$article->user->id])}}">{{$article->user->name}}</a></p>
          @auth
        
          
            @if (auth()->user()->id!=$article->user->id)
            <p><a class="btn custom-button" href=" /chatify/{{$article->user->id }}">Contatta Venditore</a></p>
            @endif
          @endauth
        </div>
      </div>
    </div>
  </div>
</x-main>