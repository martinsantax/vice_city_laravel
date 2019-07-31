<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
    <title>Carrito</title>
  </head>
  <body id="cartBody">
    	<div class="container">

        <div class="contentAll">
          <header>

            @include('/layouts/nabvar')
    				<hr size="1" class="line" />

    						<!-- MENU MOBILE -->
            @include('/layouts/navbarMobile')

    			 </header>
    		 </div>

        <div class="mainCart">
          <ul>
            @forelse ($carts as $item)
              <div class="mainLis">
                <div class="lis">
                  <li class="cartIl"> Nombre:  {{$item->name}}  | </li>
                  <li class="cartIl"> Cantidad: {{$item->quantity}}  | </li>
                  <li class="cartIl"> Precio: $ {{$item->price}}  | </li>
                  <li class="cartIl"> sub-total: $ {{$item->price * $item->quantity}}</li>
                </div>
                <a href="/delete/{{$item->id}}" class="cartDelete">Eliminar</a>
              </div>
            @empty
              <p class="pCart">Carrito vacío</p>
              <a href="/productos" class="aCart">Ver todos los productos</a>
            @endforelse
          </ul>
         <div class="">
          <form class="" action="/cartClose" method="post">
            @csrf
            <button type="submit" name="button" class="cartBuy">Comprar</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
