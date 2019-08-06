<div class="menu_footer">
  <ul class="unic">
    <li><a href="/">HOME</a></li>
    <li><a href="/products">PRODUCTOS</a></li>
    <li><a href="/faqs">FAQs</a></li>



    @if (Route::has('login'))
            @auth
              <li><a href="{{ url('/home') }}">PERFIL</a></li>
            @else
              @if (Route::has('register'))
                <li><a href="{{ route('register') }}">REGISTRATE</a></li>
              @endif
              <li><a href="{{ route('login') }}">LOGIN</a></li>
            @endauth
    @endif

  </ul>
</div>
