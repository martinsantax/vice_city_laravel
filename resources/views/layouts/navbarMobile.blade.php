<a class="mobileIcon"></a>
  <div class="mobileMenu">
      <ul class="menuListMobile">
        @if (Route::has('login'))
                @auth
                  <li><a href="{{ url('/home') }}">Hola, {{Auth::user()->name}}!</a></li>
                @else
                  <li><a href="{{ route('login') }}">LOGIN</a></li>
                  @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">REGISTRATE</a></li>
                  @endif
                @endauth
        @endif
        <li><a href="/">HOME</a></li>
        <li><a href="/productos">PRODUCTOS</a></li>
        <li><a href="/faqs">FAQs</a></li>

      </ul>
  </div>
