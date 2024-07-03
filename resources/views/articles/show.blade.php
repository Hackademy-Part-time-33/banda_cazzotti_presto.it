<x-main>

  {{--   CAROSELLO INIZIALE --}}

  <div id="carouselExampleIndicators" class="carousel carousel-dark slide border border-5 border-warning ">
    <div class="carousel-indicators">
        <h1>Nome dell'articolo: {{$article->title}}</h1>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="LEGO.jfif" class="d-block w-100  p-5" id="img-carousel" alt="img-1">

      </div>
      <div class="carousel-item">
        <img src="LEGO2.jfif" class="d-block w-100  p-5" id="img-carousel"  alt="img-2">
      </div>
      <div class="carousel-item">
        <img src="lego3.jfif" class="d-block w-100  p-5" id="img-carousel"  alt="img-3">
      </div>
    </div>

    <h3>Titolo: {{$article->title}}</h3>
    <h4 class="fw-bold">Prezzo: {{$article->price}} €</h4>
    <h5>Descrizione</h5>
    <p>{{$article->description}}</p>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden ">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</x-main>