<header class="header-v4">
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

        <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="/" class="logo">
                    <img src="images/icons/logo-simp.png" alt="IMG-LOGO">
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
                            <a href="/carrito">Mi Carro</a>
                        </li>

                        <li>
                            <a href="/comunidad">Comunidad</a>
                        </li>

                        <li>
                            <a href="/nosotros">Acerca de</a>
                        </li>

                        <li>
                            <a href="/contacto">Contacto</a>
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

                    <a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
