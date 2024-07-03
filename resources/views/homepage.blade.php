<head>
  @vite(['resources/css/home.css', 'resources/js/home.js'])
  <head>
    
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
  <div id="offerteHome">
    
    <div class="d-flex justify-content-between col-12">
      
      <div class="container mt-2">
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
    
    {{-- ----------Prodotti in primo piano --}}
    <div class="">
      <h1 class="m-5 text-center  fs-1">I preferiti Di QUesta Settimana</h1>
    </div>
    
    <div class="container">
      <div class="row d-flex justify-content-between">
        
        <div  class=" col-lg-3 col-sm-12   d-flex flex-column mt-5 mb-5">
          <img src='immagini-progetto/tansformer.webp' class="img-fluid">
          <h2><span>Nuovo set Bumblebee Transformers</span></h2>
          <p><span>Cattura l'attenzione con il prossimo Autobot nell'universo dei Transformers LEGO®</span></p>
          <a href="#"><span>Compra ora</span></a>
        </div>
        <div class="  col-lg-3 col-sm-12  d-flex flex-column mt-5 mb-5">
          <img src='immagini-progetto/stealer.webp ' class="img-fluid">
          <h2><span>Scopri le novità</span></h2> 
          <p><span>>Esplora i set LEGO® più recenti e straordinari attualmente disponibili</span></p>
          <a href="#">Compra ora</a>
        </div>
        <div class="  col-lg-3 col-sm-12   d-flex flex-column mt-5 mb-5" >
          <img src='immagini-progetto\play.webp' class="img-fluid">
          <h2><span>Unisciti ai dispettosi Minions</span></h2>
          <p><span>>Dai vita alla casa di Gru con i nuovi set Cattivissimo Me 4 LEGO®</span></p>
          <a href="#">Compra ora</a>
        </div>
        
      </div>
    </div>
    
    
    {{-- ------------secondo carosello, vari articoli --}}
    
    
    
    <div>
      <h1 class="m-5 text-center  fs-1">Set in evidenza</h1>
      <div id="album-rotator" class="w-100">
        <div id="album-rotator-holder" class="d-flex flex-row ">          
        </div>
      </div>  
    </div>
    
  </div>
  
  
  
  
  
  
  <script >
    let immagini =[];
    
    let contenitore = document.querySelector('#album-rotator-holder');
    
    for(let i=1 ; i<16; i++ ){
      
      immagini.push('immagini-progetto/prodotto'+i+'.webp');
    };
    
    function insert(){
      immagini.forEach(element => {
        let ancor = document.createElement('a');
        ancor.setAttribute('target', '_blank')
        console.log(element);
        ancor.innerHTML= `<img src='${element}' id='imgCard'> <p>Da aggiungere dopo </p> <h2>prezzo$$$ </h2> <button type="button" class="btn btn-warning">Acquista</button>`;
        ancor.classList.add('album-item', "d-flex", "flex-column", "col-2");
        
        contenitore.appendChild(ancor);
        
      });
    };
    console.log(contenitore);
    insert();
  </script>
  
  
  
  
</div>
<script src="https://kit.fontawesome.com/48764efa36.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
</x-main>

