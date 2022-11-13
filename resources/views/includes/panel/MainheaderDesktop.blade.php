<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">

            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Sistema Inteligente de Servicios Profesional
                </div>

                <div class="right-top-bar flex-w h-full">


                    @if (Route::has('login') && Auth::check() && auth()->user()->role == 'admin')
                        <a href="{{ url('/home') }}" class="flex-c-m trans-04 p-lr-25">Panel Administrador</a>
                    @elseif (Route::has('login') && Auth::check() && auth()->user()->role == 'cliente')
                    <a href="{{ url('/') }}" class="flex-c-m trans-04 p-lr-25">Mi Cuenta de Usuario</a>
                    <a href="{{ url('logout') }}" class="flex-c-m trans-04 p-lr-25"
                    onclick="event.preventDefault(); document.getElementById('formLogout').submit();">Cerrar Sesion</a>
                    <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
                        @csrf
                      </form>

                     @elseif (Route::has('login') && !Auth::check())
                        <a href="{{ url('/login') }}" class="flex-c-m trans-04 p-lr-25">Iniciar Sesion</a>
                    @endif

                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="#" class="logo">
                    <img src="images/logo-simp.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="/">Inicio</a>
                        </li>

                        <li>
                            <a href="/producto">Tienda</a>
                        </li>

                        <li>
                            <a href="/shoping-cart">Mi Carro</a>
                        </li>

                        <li>
                            <a href="/blog">Comunidad</a>
                        </li>

                        <li>
                            <a href="/about">Acerca de</a>
                        </li>

                        <li>
                            <a href="/contac">Contacto</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>

    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Sistema Inteligente de Servicios Profesional
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Ayuda
                    </a>

                    <a href="dashboard.html" class="flex-c-m p-lr-10 trans-04">
                        Mi Cuenta
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        ENG
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        ESP
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="/">Inicio</a>

                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li>

            <li>
                <a href="/producto"> Tienda</a>
            </li>

            <li>
                <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Caracteristicas</a>
            </li>

            <li>
                <a href="blog.html">Comunidad</a>
            </li>

            <li>
                <a href="about.html">Acerca de</a>
            </li>

            <li>
                <a href="/contac">Contacto</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
