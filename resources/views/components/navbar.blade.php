<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary rounded z-3 mynav">

    <div class="container-fluid ">
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

                <ul class="navbar-nav me-auto mx-2  mb-lg-0">
                    <li class="nav-item anm_link mx-3 ">
                        <a class="nav-link " href="{{ route('homepage') }}">Home </a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a class="nav-link anm_link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" target="_self">
                            Categorie prodotti
                        </a>
                        <ul class="dropdown-menu">

                            @forelse ($categories as $category)
                                <li><a class="dropdown-item"
                                        href='{{ route('byCategory', ['category' => $category]) }}'>{{ $category->name }}</a>
                                </li>
                            @empty
                                Nessuna categoria
                            @endforelse
                        </ul>
                    </li>
                    <li class="nav-item mx-3 anm_link">
                        <a class="nav-link @if (request()->routeIs('homepage')) link-active @endif"
                            href="{{ route('articles.index') }}">Tutti i prodotti</a>
                    </li>
                    <li class="nav-item mx-3 anm_link">
                        <a class="nav-link @if (request()->routeIs('homepage')) link-active @endif"
                            href="{{ route('about') }}">Chi siamo </a>
                    </li>
                    <li class="nav-item mx-3 anm_link">
                        <a class="nav-link @if (request()->routeIs('homepage')) link-active @endif"
                            href="{{ route('contacts') }}">Contatti</a>
                    </li>
                    <li>
                        <div class="inline-block mt-2 me-4">
                            <a>
                                <input id="searchInput" class="search" type="text" name="search"
                                    placeholder="Search..">
                                <img id="searchIcon" src="{{ asset('search.svg') }}" height="25" alt="Site Logo"
                                    class="position-relative" />
                            </a>
                        </div>
                    </li>

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

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <a href="{{ route('articles.create') }}" class="btn custom-button w-100"
                                        id="btn_nav">Inserisci un annuncio</a>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center">
                                    <form action="{{ route('logout') }}" method="post" class="w-100">
                                        @csrf
                                        <button class="btn custom-button w-100" type="submit" id="btn_nav">Esci</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @endguest

            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    {{-- modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
        </div>
    </div>
</nav>
