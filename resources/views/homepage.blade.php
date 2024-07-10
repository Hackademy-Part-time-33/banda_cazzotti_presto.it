

        <x-main >
            {{--   CAROSELLO INIZIALE --}}




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

        <div class="d-flex justify-content-between align-items-center col-12">

            <div class="container mt-2">
                <div class="row  ">

                    <div
                        class="d-flex flex-column align-items-center justify-content-sm-center col-xs-12 col-sm-6  col-lg-3  ">
                        <a href="#" class=" "><img src="LEGOFACE.jfif" alt="legoimg" id="legoface"></a>
                        <label for="legoface">I Nostri Cataloghi</label>
                    </div>

                    <div
                        class="d-flex flex-column align-items-center justify-content-sm-center col-xs-12 col-sm-6 col-lg-3">
                        <a href="#"><img src="LEGOFRIEND.jfif" alt="legoimg" id="legofriend" class="pt-3"></a>
                        <label for="legofriend">Giochi di ruolo</label>
                    </div>

                    <div
                        class="d-flex flex-column align-items-center justify-content-sm-center col-xs-12 col-sm-6  col-lg-3">
                        <a href="#"><img src="LEGOGIOCONDA.jfif" alt="legoimg" id="legogioconda"></a>
                        <label for="legogioconda">Le Nostre Opere</label>
                    </div>

                    <div
                        class="d-flex flex-column align-items-center justify-content-sm-center col-xs-12 col-sm-6  col-lg-3 ">
                        <a href="#"><img src="legobaby.jfif" alt="legoimg" id="legobaby"></a>
                        <label for="legobaby">Adatto Per I Bambini</label>
                    </div>

                </div>

            </div>
        </div>

        {{-- ----------Prodotti in primo piano --}}
        <div class="">
            <h1 class="m-5 text-center  fs-1">I preferiti di questa settimana</h1>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-between  justify-content-center">

                <div class=" col-lg-3 col-sm-12   d-flex flex-column mt-5 mb-5   ">
                    <img src='immagini-progetto/tansformer.webp' class="img-fluid">
                    <h2 class="fs-4 fw-bold ">Nuovo set Bumblebee Transformers</h2>
                    <p>Cattura l'attenzione con il prossimo Autobot nell'universo dei Transformers
                        LEGO®</p>
                    <button class="btn btn-outline-danger">Compra ora</button>
                </div>
                <div class="  col-lg-3 col-sm-12 d-flex flex-column mt-5 mb-5   ">
                    <img src='immagini-progetto/stealer.webp ' class="img-fluid">
                    <h2 class="fw-bold">Scopri le novità</h2>
                    <p><span>Esplora i set LEGO® più recenti e straordinari attualmente disponibili</p>
                    <button class="btn btn-outline-danger">Compra ora</button>
                </div>
                <div class="  col-lg-3 col-sm-12   d-flex flex-column mt-5 mb-5   ">
                    <img src='immagini-progetto\play.webp' class="img-fluid">
                    <h2 class="fw-bold">Unisciti ai dispettosi Minions</h2>
                    <p>Dai vita alla casa di Gru con i nuovi set Cattivissimo Me 4 LEGO®</p>
                    <button class="btn btn-outline-danger">Compra ora</button>
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
            <h1 class="m-5 text-center  fs-1">Set in evidenza</h1>
            <div id="album-rotator" class="w-100">
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
