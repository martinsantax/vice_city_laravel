@extends('master')
  @section('product')

    <title>Detalle del Producto</title>

          <div class="contentAll">
            <div class="product" >
              <a id="X" href="/products">X</a>
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

    @endsection
