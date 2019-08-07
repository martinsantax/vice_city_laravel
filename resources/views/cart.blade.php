@extends('master')
  @section('cart')

    <title>Carrito</title>

        <div class="mainCart">
          <ul class="ulCart">
            @php
              $carritoVacio = false;
            @endphp
            @forelse ($carts as $item)
              <div class="mainLis">
                <div class="lis">
                  <li class="cartIl"> Nombre:  {{$item->name}}  | </li>
                  <li class="cartIl"> Nombre:  {{$item->name}}  | </li>
                  <li class="cartIl"> Cantidad: {{$item->quantity}}  | </li>
                  <li class="cartIl"> Precio: $ {{$item->price}}  | </li>
                  <li class="cartIl"> sub-total: $ {{$item->price * $item->quantity}}</li>
                </div>
                <a href="/delete/{{$item->id}}" class="cartDelete">Eliminar</a>
              </div>
            @empty
              <p class="pCart">Carrito vacío</p>
              <a href="/products" class="aCart">Ver todos los productos</a>
              @php
                $carritoVacio = true;
              @endphp
            @endforelse
          </ul>
          @if (!$carritoVacio)
            <div class="cartForm">
             <form class="addForm" action="/cartClose" method="post">
               @csrf
               <button type="submit" name="button" class="cartBuy">Comprar</button>
             </form>
           </div>
           @endif

      </div>

  @endsection
