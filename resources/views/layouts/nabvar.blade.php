  <div class="logo">
    <h1> <a href="/"><img src="../image/logo.png" ></a></h1>
  </div>

  <div class="nav">
      <li class="nav__menu"><a class="navA" href="{{ url('/') }}">HOME</a></li>
      <li class="nav__menu"><a class="navA" href="{{ url('products') }}">PRODUCTOS</a></li>
      <li class="nav__menu"><a class="navA" href="{{ url('FAQs') }}">FAQs</a></li>

      @if (Route::has('login'))
              @auth
      <li class="nav__menu" id="userName">Hola, {{Auth::user()->name}}!
        <ul class="nav__menu-lists">
          <li class="nav__menu-items"><a class="navA" href="{{ url('home') }}">PERFIL</a></li>
          <li class="nav__menu-items"><a class="navA" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Cerrar Sesión') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form></li>
        </ul>
      </li>

      <li class="nav__menu"><a id="cart" href="/cart"><img src="../image/cart.png" ></a>
        <ul class="nav__menu-lists nav__menu--1-lists"  id="hist">
          <li class="nav__menu-items"><a class="navA" href="{{ url('history') }}">HISTORIAL</a></li>
        </ul>
      </li>

        @else
          @if (Route::has('register'))
            <li class="nav__menu"><a class="navA"  id="userName" href="{{ route('register') }}">REGISTRATE</a></li>
                @endif
                  <li class="nav__menu"><a class="navA" id="login" href="{{ route('login') }}">LOGIN</a></li>
              @endauth
      @endif

    </ul>
  </div>
