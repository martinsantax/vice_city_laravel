<a href="#" class="mobileIcon"></a>
  <div class="mobileMenu">
      <ul class="menuListMobile">
        <li><a href="/">HOME</a></li>
        <li><a href="/productos">PRODUCTOS</a></li>
        <li><a href="/faqs">FAQs</a></li>

            @if (Route::has('register'))
              <li><a href="{{ route('register') }}">REGISTRATE</a></li>
            @endif

            @if (Route::has('login'))
                    @auth
                      <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                      <li><a href="{{ route('login') }}">LOGIN</a></li>
                    @endauth
            @endif

      </ul>
  </div>
