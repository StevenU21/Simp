<ul class="navbar-nav">
    <li class="nav-item  active ">
      <a class="nav-link  active " href="/home">
        <i class="ni ni-tv-2 text-primary"></i> Panel
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="./examples/tables.html">
        <i class="ni ni-circle-08 text-pink"></i> Usuarios
      </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="./examples/tables.html">
          <i class="ni ni-bullet-list-67 text-red"></i> Categorias
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="./examples/tables.html">
          <i class="ni ni-single-02 text-yellow"></i> Trabajadores
        </a>
      </li>

    <a href="{{ route('logout') }}" class="dropdown-item" target="_blank"
    onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
      <i class="ni ni-user-run"></i> <span>Cerrar Sesion</span>
    </a>
    <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
      @csrf
    </form>

  </ul>
</div>
</div>
</nav>
