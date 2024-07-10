<head>
  @vite(['resources/css/show.css', 'resources/js/show.js'])
  <head>
    
    <x-main>
      
      {{--   CAROSELLO INIZIALE --}}
      <div class="container">
        <div class="row {{-- flex-column flex-lg-row --}}">
          
          
          <col-8 class="col-12 col-lg-7 mt-5 mt-lg-0">
          <div id="carouselExampleIndicators" class="carousel w-100 carousel-dark slide border border-5 border-warning ">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('LEGO2.jfif') }}" class="d-block w-100  p-5" id="img-carousel" alt="img-1">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('LEGO.jfif') }}" class="d-block w-100  p-5" id="img-carousel"  alt="img-2">
                <div class="carousel-caption d-none d-md-block">
                  <h5>{{$article->title}}</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('lego3.jfif') }}" class="d-block w-100  p-5" id="img-carousel"  alt="img-3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>{{$article->title}}</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden ">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </col-8>
        <col-4 class="col-12 col-lg-4 flex-fill">
        <div class="{{-- d-flex flex-column --}} m-5">
          <h3>{{$article->title}}</h3>
          <h4 class="fw-bold">{{Str::replace('.', ',', sprintf("%.2f", $article->price))}} €</h4>
          <h5>Descrizione</h5>
          <p>{{$article->description}}</p>
          <p>Categoria: <a href="{{route('byCategory', ['category' => $article->category])}}">{{$article->category->name}}</a></p>
          <p>Autore del prodotto: {{$article->user->name}}</p>
        </div>
      </col-4>
    </div>
  </div>
</x-main>