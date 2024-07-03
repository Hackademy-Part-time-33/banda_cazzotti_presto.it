<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="{{ route('homepage') }}">
            <img src="LogoLegoNavbar.png" height="50" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
        </a>



        <!-- Collapsible wrapper -->

        <!-- Left links -->

        <div class="d-flex align-items-end">
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
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
                <div class="d-grid gap-2 d-md-block">
                    <a href="{{ route('login') }}" class="btn" id="btn_nav"> Accedi</a>
                    <a href="{{ route('register') }}" class="btn" id="btn_nav">Registrati</a>
                </div>


                {{-- <a  class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit"
                    role="button"><i class="fab fa-github"></i></a> --}}
            </div>

        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
