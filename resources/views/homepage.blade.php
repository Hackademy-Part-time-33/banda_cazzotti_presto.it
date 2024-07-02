<x-main>
    {{--   CAROSELLO INIZIALE --}}
    

    <div id="carouselExampleIndicators" class="carousel carousel-dark slide border border-5 border-warning ">
     <div class="carousel-indicators">
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


     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden ">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>



{{--    -------OFFERTE --}}

<div class="d-flex justify-content-between col-12">
    <div class="container">
        <div class="row">

    <div class="d-flex flex-column col-xs-12 col-sm-6  col-lg-3">
   <a href="#"><img src="LEGOFACE.jfif" alt="legoimg" id="legoface"></a>
   <label for="legoface">I Nostri Cataloghi</label>
    </div>

    <div class="d-flex flex-column col-xs-12 col-sm-6  col-lg-3">
    <a href="#"><img src="LEGOFRIEND.jfif" alt="legoimg" id="legofriend" class="rounded-circle"></a>
    <label for="legofriend">Giochi di ruolo</label>
    </div>

    <div class="d-flex flex-column col-xs-12 col-sm-6  col-lg-3">
    <a href="#"><img src="LEGOGIOCONDA.jfif" alt="legoimg" id="legogioconda"></a>
    <label for="legogioconda">Le Nostre Opere</label>
    </div>

    <div class="d-flex flex-column col-xs-12 col-sm-6  col-lg-3">
    <a href="#"><img src="legobaby.jfif" alt="legoimg" id="legobaby"></a>
    <label for="legobaby">Adatto Per I Bambini</label>
    </div>

    </div>

</div>
</div>
</div>
</x-main>