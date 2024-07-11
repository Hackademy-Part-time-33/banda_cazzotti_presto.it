<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary rounded z-3 mynav mb-2 sticky-top ">

    <div class="container-fluid bg-body-tertiary  ">
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


            <div class="collapse navbar-collapse " id="navbarsExample05">
                <!-- Left links -->

                <ul class="navbar-nav  d-flex align-items-center mx-2  mb-lg-0">
                    <li class="nav-item anm_link mx-3 ">
                        <a class="nav-link @if (request()->routeIs('homepage')) nav-active @endif "
                            href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a class="nav-link anm_link dropdown-toggle @if (request()->routeIs('byCategory')) nav-active @endif"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            target="_self">
                            Categorie
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

                    <li>
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

                            <div class="d-flex">{{-- aaaa --}}
                                <div class="dropdown col-6-md-12 me-2">
                                    <a class="btn custom-button dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                        </svg>
                                        {{ auth()->user()->name }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('articles.create') }}"">Inserisci un
                                                annuncio</a>
                                        </li>
                                        @if (Auth::user()->is_revisor)
                                            <li>
                                                <a class=" dropdown-item" href="{{ route('revisor.index') }}">Zona revisore
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-6-md-12 d-flex justify-content-center">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="btn custom-button" id="btn_nav" type="submit"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                            </svg></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
        </div>
    </div>
    </div>
</nav>
