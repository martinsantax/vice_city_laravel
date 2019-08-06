<a class="mobileIcon"></a>
  <div class="mobileMenu">
      <ul class="menuListMobile">
        @if (Route::has('login'))
                @auth
                  <li><a href="{{ url('/home') }}">Hola, {{Auth::user()->name}}!</a></li>
                  <li><a href="/cart"><img src="../image/cart2.png" ></a></li>
                  <li><a href="{{ url('history') }}">Historial</a></li>
                @else
                  <li><a href="{{ route('login') }}">LOGIN</a></li>
                  @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">REGISTRATE</a></li>
                  @endif
                @endauth
        @endif
        <li><a href="/">HOME</a></li>
        <li><a href="/products">PRODUCTOS</a></li>
        <li><a href="/faqs">FAQs</a></li>
        <li><a class="navA" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Cerrar Sesión') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form></li>

      </ul>
  </div>
