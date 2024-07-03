<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->

        <a class="navbar-brand me-2" href="{{ route('homepage') }}">
            <img src="{{ asset('LogoLegoNavbar.png') }}" class="bg-danger" height="50" alt="Site Logo" loading="lazy"
                style="margin-top: -1px;" />
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
                    <li class="nav-item mx-3 ">
                        <a class="nav-link" href="{{ route('homepage') }}">Home </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('about') }}">Chi siamo </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                    </li>

                    <li class="nav-item mx-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Lista prodotti
                        </a>
                        <ul class="dropdown-menu">

                            @forelse ($categories as $category)
                                <li><a class="dropdown-item" href="#">{{ $category->name }}</a></li>
                            @empty
                                Nessuna categoria
                            @endforelse


                        </ul>
                    </li>

                </ul>
                @guest
                    <div class="d-grid gap-2 d-md-block">
                        <a href="{{ route('login') }}" class="btn" id="btn_nav"> Accedi</a>
                        <a href="{{ route('register') }}" class="btn" id="btn_nav">Registrati</a>
                    </div>
                @else
                    <div class="d-grid gap-2 d-md-block">
                        <p>Benvenuto {{ auth()->user()->name }}</p>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn" type="submit" id="btn_nav">Log out</button>
                        </form>

                    </div>
                @endguest



                {{-- <a  class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit"
                    role="button"><i class="fab fa-github"></i></a> --}}
            </div>

        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
