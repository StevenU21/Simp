    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="/"><img src="images/icons/logo-simp.png" alt="IMG-LOGO"></a>
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
            </li>

        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="#">Inicio</a>
            </li>

            <li>
                <a href="#">Tienda</a>
            </li>

            <li>
                <a href="#">Mi Carro</a>
            </li>

            <li>
                <a href="#">Comunidad</a>
            </li>

            <li>
                <a href="#">Acerca de</a>
            </li>

            <li>
                <a href="#">Contacto</a>
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
                <input class="plh3" type="text" name="search" placeholder="Buscar...">
            </form>
        </div>
    </div>
