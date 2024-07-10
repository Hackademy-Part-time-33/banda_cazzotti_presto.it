<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary rounded z-3 mynav mb-2">

    <div class="container-fluid bg-body-tertiary">
        <!-- Navbar brand -->
        <a class="navbar-brand ms-5" href="{{ route('homepage') }}">
            <img src="{{ asset('LogoLegoNavbar.png') }}" class="bg-danger rounded" height="50" alt="Site Logo"
                loading="lazy" style="margin-top: -1px;" />
        </a>
        <!-- Left links -->

        <div class="d-flex align-items-end">
            <div class="d-inline-block">
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample05" aria-controls="navbar" aria-expanded="false"
                    aria-label="Toggle navigation" id="nav_toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>


            <div class="collapse navbar-collapse bg-sucsess " id="navbarsExample05">
                <!-- Left links -->

                <ul class="navbar-nav  d-flex align-items-center mx-2  mb-lg-0">
                    <li class="nav-item anm_link mx-3 ">
                        <a class="nav-link @if (request()->routeIs('homepage')) nav-active @endif "
                            href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a class="nav-link anm_link dropdown-toggle @if (request()->routeIs('byCategory')) nav-active @endif""
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            target="_self">
                            Categorie prodotti
                        </a>
                        <ul class="dropdown-menu bg-body-tertiary">

                            @forelse ($categories as $category)
                                <li><a class="dropdown-item nav-link"
                                        href='{{ route('byCategory', ['category' => $category]) }}'>{{ $category->name }}</a>
                                </li>
                            @empty
                                Nessuna categoria
                            @endforelse
                        </ul>
                    </li>
                    <li class="nav-item mx-3 anm_link">
                        <a class="nav-link @if (request()->routeIs('articles.index')) nav-active @endif"
                            href="{{ route('articles.index') }}">Tutti i prodotti</a>
                    </li>
                    <li class="nav-item mx-3 anm_link">
                        <a class="nav-link @if (request()->routeIs('about')) nav-active @endif"
                            href="{{ route('about') }}">Chi siamo </a>
                    </li>
                    <li class="nav-item mx-3 anm_link">
                        <a class="nav-link @if (request()->routeIs('contacts')) nav-active @endif"
                            href="{{ route('contacts') }}">Contatti</a>
                    </li>
                    <li>
                        <form id="searchForm" class="inline-block mt-2 me-4" role="search"
                            action="{{ route('articles.search') }}" method="GET">
                            <div class="input-group">
                                <input id="searchInput" type="search" name="query" class="search form-control"
                                    placeholder="Cerca Articoli" aria-label="search">
                                <button id="searchButton" type="button" class="btn">
                                    <img id="searchIcon" src="{{ asset('search.svg') }}" height="25" alt="Site Logo"
                                        class="position-relative" />
                                </button>
                            </div>
                        </form>
                    </li>
                    {{-- non funziona  --}}
                    <li>@auth


                            @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a href="{{ route('revisor.index') }}">Zona revisore</a>
                        </li>
                        @endif
                    @endauth
                    </li>
                </ul>
                @guest
                    <div class="d-grid gap-2 d-md-block">
                        <a href="{{ route('login') }}" class="btn custom-button" id="btn_nav"> Accedi</a>
                        <a href="{{ route('register') }}" class="btn custom-button" id="btn_nav">Registrati</a>
                    </div>
                @else
                    <div class="align-items-center">
                        <p class="mt-1 text-center fs-6 fw-semibold">Benvenuto {{ auth()->user()->name }} !</p>
                        <div class="container-flex">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <button href="{{ route('articles.create') }}" class="btn custom-button" id="btn_nav">
                                        Inserisci un annuncio
                                    </button>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    @if (Auth::user()->is_revisor)
                                        <button class="btn custom-button" id="btn_nav  href="{{ route('revisor.index') }}">
                                            Zona revisore
                                        </button>
                                    @endif
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="btn custom-button  btn_esci" type="submit"
                                            id="btn_nav">Esci</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
