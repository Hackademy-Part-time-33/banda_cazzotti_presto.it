<x-main>




    {{--   IMMAGINE INIZIALE --}}
    <div class="container-fluid">

        <div id="firtSection" style=" background-image: url('{{ asset('immagini-progetto/tansformer.webp') }}')"
            class="mt-2">
        </div>

    </div>
    {{--  --------------FineImmagine --}}


    {{--    -------Categorie --}}
    <div id="offerteHome">

        <div class="d-flex justify-content-between col-12">

            <div class="container mt-2">
                <div class="row ">

                    <ul class="QuickLinks_ul__WOQOA d-flex justify-content-center grid gap column-gap-3 list-unstyled"
                        data-test="quicklinks" style="background-color: transparent">
                        @foreach ($category as $category)
                            <li data-test="quicklink-link " class="QuickLinks_li__z6b2v ">
                                <a href="/categories/new-sets-and-products?icmp=HP-SHQL-Standard-HP_QUICKLINK_NEW-P-NO-X18YF0AP1I"
                                    data-test="quicklink-link-0" target=""
                                    class="QuickLinks_labelDark__UY_rw categ_home" rel="noreferrer">
                                    <picture data-test="quicklink-image" fit="crop">
                                        <source type="image/webp"
                                            srcset="{{ asset('immagini-progetto/prodotto' . $category->id . '.webp') }}"
                                            media="(min-width: 900px)" width="120" height="97"><img alt=""
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
    <div class="container">
        <div class="row d-flex flex-row  justify-content-between">
            <div class="  col-12 col-md-5">
                <h2 class="text-danger text-center font-weight-bold">{{__('ui.new_products')}}</h2>


                <div class="swiper w-50  h-75 border border-danger border-5 rounded">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @forelse ($articles as $article)
                            <div class="swiper-slide">
                                <x-card :article="$article" :width=15 :height=480 />
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
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev text-warning"></div>
                    <div class="swiper-button-next text-warning"></div>

                    <!-- If we need scrollbar -->
                </div>

            </div>
            {{--  ------FineNuoviProdotti --}}




            {{--     ------------secondo carosello, vari articoli --}}




            <div class=" col-12 col-md-6 d-flex align-item-start">
                <div id="album-rotator" class="w-100 ">
                    <h1 class="mb-5 text-center  fs-1 text-danger">Set in evidenza</h1>
                    <div id="album-rotator-holder" class="d-flex flex-row  carousel2 ">


                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div>

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
                ancor.setAttribute('target', '_blank');

                console.log(element);

                ancor.innerHTML =
                    `<img src='${element}' id='imgCard'> <p>Da aggiungere dopo </p> <h2>prezzo$$$ </h2> <button type="button" class="btn btn-danger">Acquista</button>`;
                ancor.classList.add('album-item', "d-flex", "flex-column", "col-12", "col-md-2", "w-75",
                    "bg-warning");

                contenitore.appendChild(ancor);

            });
        };
        console.log(contenitore);
        insert();
    </script>


    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

        const swiper = new Swiper(...)
    </script>
    <script src="https://kit.fontawesome.com/48764efa36.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap"
        rel="stylesheet">
</x-main>
