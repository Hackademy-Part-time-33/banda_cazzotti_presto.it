<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary rounded z-3 ">

    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="{{ route('homepage') }}">
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


            <div class="collapse navbar-collapse" id="navbarsExample05">
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
                            <a class="navbar-brand ">
                                <img src="{{ asset('search.svg') }}" height="25" alt="Site Logo" loading="lazy"
                                    class="position-absolute " />
                            </a>
                        </div>
                    </li>

                </ul>

                <a class="nav-link @if (request()->routeIs('articles.index')) nav-active @endif"
                    href="{{ route('articles.index') }}" target="_self">Tutti i prodotti</a>
                </li>
                <li class="nav-item mx-3 anm_link">
                    <a class="nav-link @if (request()->routeIs('about')) nav-active @endif" href="{{ route('about') }}"
                        target="_self">Chi siamo </a>
                </li>
                <li class="nav-item mx-3 anm_link">
                    <a class="nav-link @if (request()->routeIs('contacts')) nav-active @endif"
                        href="{{ route('contacts') }}" target="_self">Contatti</a>
                </li>
                <li>
                    <div class="inline-block mt-2 me-4">
                        <a class="navbar-brand " target="_self">
                            <img src="{{ asset('search.svg') }}" height="25" alt="Site Logo" loading="lazy"
                                class="position-absolute " />
                        </a>
                    </div>

                </li>
                </ul>


                @guest
                    <div class="d-grid gap-2 d-md-block">
                        <a href="{{ route('login') }}" class="btn custom-button" id="btn_nav"> Accedi</a>
                        <a href="{{ route('register') }}" class="btn custom-button" id="btn_nav">Registrati</a>
                    </div>
                @else
                    <div class="d-grid gap-2 align-items-center Button">
                        <p class="mt-1 text-center fs-6 fw-semibold">Benvenuto {{ auth()->user()->name }} !</p>

                        <div class="container">
                            <div class="row">
                                <a href="{{ route('articles.create') }}" class="btn custom-button  col-12"
                                    id="btn_nav">Inserisci un
                                    annuncio</a>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <form action="{{ route('logout') }}" class="col-12" method="post">
                                        @csrf
                                        <div>
                                            <button class="btn custom-button col-12" type="submit"
                                                id="btn_nav">Esci</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endguest

        </div>

    </div>
    <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
