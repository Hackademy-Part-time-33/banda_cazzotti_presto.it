

        <x-main >
            {{--   CAROSELLO INIZIALE --}}

            <div class="container">
                <div id="carouselExampleIndicators"
                    class="carousel carousel-dark slide border border-5 border-warning carousel ">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="LEGO.jfif" class="d-block w-100  p-5" id="img-carousel" alt="img-1">

                        </div>
                        <div class="carousel-item">
                            <img src="LEGO2.jfif" class="d-block w-100  p-5" id="img-carousel" alt="img-2">
                        </div>
                        <div class="carousel-item">
                            <img src="lego3.jfif" class="d-block w-100  p-5" id="img-carousel" alt="img-3">
                        </div>
                    </div>
                </div>




                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden ">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



            {{--    -------OFFERTE --}}
            <div id="offerteHome">

                <div class="d-flex justify-content-between col-12">

                    <div class="container mt-2">
                        <div class="row ">

                            <ul class="QuickLinks_ul__WOQOA d-flex justify-content-center" data-test="quicklinks" style="background-color: rgb(228, 229, 236);">
                                @forEach($category as $category)
                                <li data-test="quicklink-link" class="QuickLinks_li__z6b2v "><a href="/categories/new-sets-and-products?icmp=HP-SHQL-Standard-HP_QUICKLINK_NEW-P-NO-X18YF0AP1I" data-test="quicklink-link-0" target="" class="QuickLinks_labelDark__UY_rw" rel="noreferrer"><picture data-test="quicklink-image" fit="crop"> 
                                        <source type="image/webp" srcset="{{asset('immagini-progetto/prodotto'.$category->id.'.webp')}}" media="(min-width: 900px)" width="120" height="97"><img alt="" decoding="async" loading="lazy" style="object-fit: fill;" src="https://www.lego.com/cdn/cs/set/assets/blta6e69aaa6a8814f9/Jan-Feb-DrivePeriod-Home-202401-Quicklink-New.png?fit=crop&amp;quality=80&amp;width=120&amp;height=97&amp;dpr=1">
                                        
                                        </picture><div aria-hidden="false" class="">
                                            
                                            <span data-test="markup" class="markup">{{$category->name}}</span></div></a>
                                        </li>
                                        @endforEach
                                            
                                            
                                            
                                            
                                            
                                           





                             {{--    <li class="  col-xs-12 col-sm-6  col-lg-3 list-group-item m-2" id="lista"> <img src="LEGOFACE.jfif" alt="legoimg" class="img-fluid"
                                    id="legocard"> 
                            </li>


                                <li class=" col-xs-12 col-sm-6  col-lg-3 list-group-item m-2 " id="lista"> <img src="LEGOFRIEND.jfif" alt="legoimg" id="legocard"
                                    class="img-fluid">
                                    <h4 class="align-items-center" id="sottotitolo-categorie">Batman</h4>
                            </li>


                                <li class=" col-xs-12 col-sm-6  col-lg-3 list-group-item m-2 "  id="lista"><img src="LEGOGIOCONDA.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                    
                                </li> --}}



                               {{--  ------Card --}}


                                  {{-- <div class="" id="card">
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>

                                  <div class="" id="card">
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>

                                  <div class="" id="card"> 
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>

                                  <div class="" id="card">
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>

                                  <div class="" id="card">
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>

                                  <div class="" id="card">
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>

                                  <div class="" id="card">
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>

                                  <div class="" id="card">
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>

                                  <div class="" id="card">
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>

                                  <div class="" id="card">
                                    <div class="card" >
                                        <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                        <div class="card-body">
                                          <h5 class="card-title text-center">Card title</h5> 
                                        </div>
                                      </div>
                                  </div>
 --}}
                                  
                             {{--        listA --}}

                                   {{--  <li class=" col-xs-12 col-sm-6  col-lg-3 list-group-item m-2 " id="lista"> <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                    </li>

                                    <li class=" col-xs-12 col-sm-6  col-lg-3 list-group-item m-2 " id="lista"> <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                    </li> --}}

                                   {{--  <li class=" col-xs-12 col-sm-6  col-lg-3 list-group-item m-2 " id="lista"> <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                    </li>

                                    <li class=" col-xs-12 col-sm-6  col-lg-3 list-group-item m-2 " id="lista"> <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                    </li>

                                    <li class=" col-xs-12 col-sm-6  col-lg-3 list-group-item m-2 " id="lista"> <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                    </li>

                                    <li class=" col-xs-12 col-sm-6  col-lg-3 list-group-item m-2 " id="lista"> <img src="legobaby.jfif" alt="legoimg" id="legocard" class="img-fluid">
                                    </li> --}}
                           


                        </div>
                    
                    </div>
                </div>

            </div>
                {{-- ----------Preferiti di questa settimana --}}
                

                <div class="container bg-warning p-3">
                    
                        <h1 class=" text-center  fs-1  text-danger" id="preferiti">I preferiti Di Questa Settimana</h1>
                   
                    <div class="row d-flex justify-content-between">

                        <div class=" col-lg-3 col-sm-12   d-flex flex-column mt-5 mb-5">
                            <img src='immagini-progetto/tansformer.webp' class="img-fluid">
                            <h2><span>Nuovo set Bumblebee Transformers</span></h2>
                            <p><span>Cattura l'attenzione con il prossimo Autobot nell'universo dei Transformers
                                    LEGO®</span></p>
                            <a href="#"><span>Compra ora</span></a>
                        </div>
                        <div class="  col-lg-3 col-sm-12  d-flex flex-column mt-5 mb-5">
                            <img src='immagini-progetto/stealer.webp ' class="img-fluid">
                            <h2><span>Scopri le novità</span></h2>
                            <p><span>>Esplora i set LEGO® più recenti e straordinari attualmente disponibili</span></p>
                            <a href="#">Compra ora</a>
                        </div>
                        <div class="  col-lg-3 col-sm-12   d-flex flex-column mt-5 mb-5">
                            <img src='immagini-progetto\play.webp' class="img-fluid">
                            <h2><span>Unisciti ai dispettosi Minions</span></h2>
                            <p><span>>Dai vita alla casa di Gru con i nuovi set Cattivissimo Me 4 LEGO®</span></p>
                            <a href="#">Compra ora</a>
                        </div>

                    </div>
                </div>


                <h2 class="text-danger text-center font-weight-bold">Nuovi Prodotti</h2>
                <div class=" d-flex  flex-wrap justify-content-between flex-row border border-3 border-danger m-5 p-3 ">
                    @forelse ($articles as $article)
                        <div class="">
                            <x-card :article="$article" />
                        </div>
                    @empty
                        <div class="">
                            <h3>
                                Nessun articolo è ancora stato creato
                            </h3>
                        </div>
                    @endforelse




                    <div class="d-flex justify-content-center">
                        <div>

                        </div>
                    </div>
                </div>

                {{--     ------------secondo carosello, vari articoli --}}



                <div>
                  
                    <div id="album-rotator" class="w-100">
                        <h1 class="m-5 text-center  fs-1">Set in evidenza</h1>
                        <div id="album-rotator-holder" class="d-flex flex-row  carousel2">


                        </div>

                    </div>






                    <script>
                        let immagini = [];

                        let contenitore = document.querySelector('#album-rotator-holder');

                        for (let i = 1; i < 16; i++) {

                            immagini.push('immagini-progetto/prodotto' + i + '.webp');
                        };

                        function insert() {
                            immagini.forEach(element => {
                                let ancor = document.createElement('a');
                                ancor.setAttribute('target', '_blank')
                                console.log(element);
                                ancor.innerHTML =
                                    `<img src='${element}' id='imgCard'> <p>Da aggiungere dopo </p> <h2>prezzo$$$ </h2> <button type="button" class="btn btn-warning">Acquista</button>`;
                                ancor.classList.add('album-item', "d-flex", "flex-column", "col-12", "col-md-2");

                                contenitore.appendChild(ancor);

                            });
                        };
                        console.log(contenitore);
                        insert();
                    </script>




                </div>
                <script src="https://kit.fontawesome.com/48764efa36.js" crossorigin="anonymous"></script>
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap"
                    rel="stylesheet">
        </x-main>
