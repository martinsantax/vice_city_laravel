<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="shortcut icon" href="../image/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <title>Detalle del Producto</title>
  </head>
  <body>
  	<div class="container">

  		<div class="contentAll">
  			<header>
          @include('/layouts/nabvar')
          <hr size="1" class="line" />

              <!-- MENU MOBILE -->
          @include('/layouts/navbarMobile')
  			 </header>
  		 </div>

          <div class="contentAll">
            <div class="product" >
              <a id="X" href="/productos">X</a>
              <h8>Detalle de Producto</h8>

              <section>
                  <form class="" action="/addtocart" method="post">
                    @csrf
                    <div class="">
                      <a><img id="imgProduct" src="/storage/products/{{$product->image}}"></a>
                      <a href="/product/{{$product->id}}"><h3 id="pProduct">{{$product->name}}</h3></a>
                      <a class="price"><p id="pProduct">${{$product->price}}</p></a>
                      <input type="number" class="quantity" name="quantity" value="" placeholder="Cantidad">
                      <p class="errorQ">{{$errors->first('quantity')}}</p>
                      <button type="submit" name="id" value="{{$product->id}}" class="buybtn"> Argregar al Carrito</button>
                    </div>

                    <div class="">
                      <h2 id="h2Product"> Descripción:</h2>
                      <a><p id="descProduct">{{$product->description}}</p></a>
                      <a href="/category/{{$product->category}}"></a>
                    </div>
                  </form>
              </section>
            </div>
          </div>


  		<div class="contentAll">

        @include('/layouts/footer')

  		</div>
  	</div>
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  	<script type="text/javascript" src="../js/index.js"></script>
  </body>
</html>
