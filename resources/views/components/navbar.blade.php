<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="{{route('homepage')}}">
            <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="16" alt="MDB Logo"
                loading="lazy" style="margin-top: -1px;" />
        </a>



        <!-- Collapsible wrapper -->

        <!-- Left links -->

        <div class="d-flex align-items-end">
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('homepage')}}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">Chi siamo </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Lista prodotti
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pick and build</a></li>
                            <li><a class="dropdown-item" href="#">Scuola</a></li>
                            <li><a class="dropdown-item" href="#">Abbigliamento</a></li>
                            <li><a class="dropdown-item" href="#">Accessori per la casa</a></li>
                            <li><a class="dropdown-item" href="#">Carte regalo</a></li>


                        </ul>
                    </li>

                </ul>

                <button type="button" class="btn btn-link px-3 me-2">
                    Login
                </button>
                <button type="button" class="btn btn-link px-3 me-2">
                    Register
                </button>
                {{-- <a  class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit"
                    role="button"><i class="fab fa-github"></i></a> --}}
            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
