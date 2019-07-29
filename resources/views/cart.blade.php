<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carrito</title>
  </head>
  <body>
    <div class="">
      <ul>
        @forelse ($carts as $item)
          <li>Nombre: {{$item->name}} | Cantidad: {{$item->quantity}} |
          Precio: {{$item->price}} | sub-total: {{$item->price * $item->quantity}}</li>
          <a href="/delete/{{$item->id}}">Eliminar</a>
        @empty
          <p>Carrito vacío</p>
          <a href="/productos">Ver todos los productos</a>
        @endforelse
      </ul>
     <div class="">
      <form class="" action="/cartClose" method="post">
        @csrf
        <button type="submit" name="button">Comprar</button>
      </form>
    </div>
    </div>
  </body>
</html>
