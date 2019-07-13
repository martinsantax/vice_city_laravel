

<div class="logo">
  <h1> <a href="/"><img src="../image/logo.png" ></a></h1>
</div>

<nav class="menu">
  <ul>
    <li><a href="/">HOME</a></li>
    <li><a href="/productos">PRODUCTOS</a></li>
    <li><a href="/faqs">FAQs</a></li>

        @if (Route::has('login'))
                @auth
                <link rel="stylesheet" href="/css/hr.css">
               <li><div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Cerrar Sesión') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div></li>

                  <li id="last_one"><a href="{{ url('/home') }}">Hola, {{Auth::user()->name}}!</a></li>

                @else
                  @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">REGISTRATE</a></li>
                  @endif
                  <li id="last_one"><a href="{{ route('login') }}">LOGIN</a></li>
                @endauth
        @endif

  </ul>
</nav>
