<x-main>
    {{--   CAROSELLO INIZIALE --}}
    <x-navbar>  </x-navbar>

    <div id="carouselExampleIndicators" class="carousel slide">
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="LEGO.jfif" class="d-block w-100" alt="img-1">

       </div>
       <div class="carousel-item">
         <img src="LEGO2.jfif" class="d-block w-100" alt="img-2">
       </div>
       <div class="carousel-item">
         <img src="lego3.jfif" class="d-block w-100" alt="img-3">
       </div>
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



</x-main>