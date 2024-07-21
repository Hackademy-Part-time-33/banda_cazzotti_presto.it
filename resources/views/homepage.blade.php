<x-main>




    {{--   IMMAGINE INIZIALE --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
   
        <div id="firtSection" style=" background-image: url('{{ asset('immagini-progetto/tansformer.webp') }}')"
            class="mt-2 ">
        </div>
            </div>
        </div>
    </div>
    {{--  --------------FineImmagine --}}


    {{--    -------Categorie --}}
    <div id="offerteHome">

        <div class="d-flex justify-content-between col-12">

            <div class="container-fluid mt-2">
                <div class="row ">
                 <div class="col-12">
                    <ul class="QuickLinks_ul__WOQOA d-flex justify-content-center grid gap column-gap-3 row-gap-5 row-gap-lg-0 list-unstyled " id="categorie"
                        data-test="quicklinks" style="background-color: transparent " >
                        @foreach ($category as $category)
                            <li data-test="quicklink-link " class="QuickLinks_li__z6b2v ">
                                <a href="{{route('byCategory',$category)}}"
                                    data-test="quicklink-link-0" target=""
                                    class="QuickLinks_labelDark__UY_rw categ_home" rel="noreferrer">
                                    <picture data-test="quicklink-image" fit="crop">
                                        <source type="image/webp"
                                            srcset="{{ asset('immagini-progetto/prodotto' . $category->id . '.webp') }}"
                                           width="120" height="97"><img alt=""
                                            decoding="async" loading="lazy" style="object-fit: fill;"
                                            src="https://www.lego.com/cdn/cs/set/assets/blta6e69aaa6a8814f9/Jan-Feb-DrivePeriod-Home-202401-Quicklink-New.png?fit=crop&amp;quality=80&amp;width=120&amp;height=97&amp;dpr=1">

                                    </picture>
                                    <div aria-hidden="false" class="">

                                        <span data-test="markup" class="markup ">{{ $category->name }}</span>
                                    </div>
                                </a>
                            </li>
                        @endforEach
                    </ul>
                </div>

                </div>
            </div>
        </div>
    </div>

    {{--       ------FINE CATEGORIE   --}}

    {{-- ----------Preferiti di questa settimana --}}


    <div class="container bg-warning rounded p-3">

        <h1 class=" text-center  fs-1 fw-bolder  text-danger" id="preferiti">{{__('ui.preferites')}}</h1>

        <div class="row d-flex justify-content-between">

            <div class=" col-lg-3 col-sm-12   d-flex flex-column mt-5 mb-5 align-items-center ">
                <img src='immagini-progetto/tansformer.webp' class="img-fluid">
                <h2><span>Nuovo set Bumblebee Transformers</span></h2>
                <p><span>Cattura l'attenzione con il prossimo Autobot nell'universo dei Transformers
                        LEGO®</span></p>
                <a href="#"><button class="btn btn-outline-danger">{{__('ui.buy_now')}}</button></a>
            </div>
            <div class="  col-lg-3 col-sm-12  d-flex flex-column mt-5 mb-5 align-items-center">
                <img src='immagini-progetto/stealer.webp ' class="img-fluid">
                <h2><span>Scopri le novità</span></h2>
                <p><span>Esplora i set LEGO® più recenti e straordinari attualmente disponibili</span></p>
                <a href="#"><button class="btn btn-outline-danger">{{__('ui.buy_now')}}</button></a>
            </div>
            <div class="  col-lg-3 col-sm-12   d-flex flex-column mt-5 mb-5 align-items-center">
                <img src='immagini-progetto\play.webp' class="img-fluid">
                <h2><span>Unisciti ai dispettosi Minions</span></h2>
                <p><span>Dai vita alla casa di Gru con i nuovi set Cattivissimo Me 4 LEGO®</span></p>
                <a href="#"><button class="btn btn-outline-danger">{{__('ui.buy_now')}}</button></a>
            </div>

        </div>
    </div>



    {{--  ------NUoviProdotti --}}
    <div class="container mt-3">
        <div class="row d-flex flex-row  justify-content-between">
            <div class="  col-12 col-md-5">
                <h2 class="text-danger text-center font-weight-bold">{{__('ui.new_products')}}</h2>


                <div class="swiper w-75 h-75 w-lg-50  h-lg-75 border border-danger border-5 rounded">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @forelse ($articles as $article)
                            <div class="swiper-slide">
                                <x-card :article="$article" :width=15 :height=480  :limit=10 />
                            </div>
                        @empty
                            <div class="">
                                <h3>
                                    Nessun articolo è ancora stato creato !
                                </h3>
                            </div>
                        @endforelse

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination paginazione1"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev text-warning"></div>
                    <div class="swiper-button-next text-warning"></div>

                    <!-- If we need scrollbar -->
                </div>

            </div>
            {{--  ------FineNuoviProdotti --}}





            {{--     ------------secondo carosello, vari articoli --}}
               

            <div class="  col-12 col-md-5">
                <h2 class="text-danger text-center font-weight-bold">Tutti i Prodotti</h2>


                <div class="swiper swiper2 w-100 h-75 rounded bg-danger">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper ">
                        <!-- Slides -->
                        @forelse ($fullArticle as $article)
                            <div class="swiper-slide w-75">
                              {{--   <x-card :article="$article" :width=15 :height=480  :limit=10 /> --}}
                              @if(!$article->images)
                              <img src="{{$article->images->getUrl()}}" alt="">
                              @else
                              <img src="{{asset("LogoLegoNavbar.png")}}" alt="logolego" class="img-fluid">
                              
                              @endif
                              
                              <h4 class="text-center">{{$article->title}}</h2>
                              <p class="text-center">{{Str::limit($article->description, $limit ?? 150) }}</p>
                              <h4 class="text-center">{{$article->price}}</h3>
                            </div>
                        @empty
                            <div class="">
                                <h3>
                                    Nessun articolo è ancora stato creato !
                                </h3>
                            </div>
                        @endforelse

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination paginazione2"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev visually-hidden"></div>
                    <div class="swiper-button-next visually-hidden"></div>

                    <!-- If we need scrollbar -->
                </div>

            </div>
         
          
                  {{--    --------FINE SECONDO CAROSELLO --}}
                 
                        </div>
        
                    </div>

               
                      

                    <script src="jquery.min.js"></script>
                    <script src="owlcarousel/owl.carousel.min.js">
                    </script>
    <script src="https://kit.fontawesome.com/48764efa36.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   
</x-main>
