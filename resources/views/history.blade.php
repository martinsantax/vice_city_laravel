@extends('master')
  @section('history')
      <title>Historial</title>

      <h2 class="histTitle">Historial de Compras</h2>
      <div class="mainCart">
          <ul  class="historyUl">
            @forelse ($carts as $cart)
              <h2 class="historyH2">Fecha de Compra: {{$cart[0]->updated_at}}</h2>
              <ul class="historyUl">
              @foreach ($cart as $item)
                <div class="lis" id="lis">
                  <li class="cartIl"> * Nombre:  {{$item->name}}  | </li>
                  <li class="cartIl"> Cantidad: {{$item->quantity}}  | </li>
                  <li class="cartIl"> Precio: $ {{$item->price}}  | </li>
                  <li class="cartIl"> sub-total: $ {{$item->price * $item->quantity}}</li>
                </div>
              @endforeach
              </ul>
            @empty
              <p>No tiene historial de carritos</p>
            @endforelse
          </ul>
      </div>



  @endsection
