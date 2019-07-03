<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/index.css')}}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="contenedor">

      <div class="">
        <h1>Agregar Productos</h1>
        <a class="close" href="#">X</a>
      </div>

      <form class="" action="/agregarProductos" method="post" enctype="multipart/form-data">
        @csrf

        <div class="">
          <input class="input" type="text" name="name" value="{{old("name")}}" placeholder="Nombre de Producto">
                 <small>{{$errors->first('name')}}</small>
        </div>

      <div class="">
          <input class="input" type="number" name="price" value="{{old("price")}}" placeholder="Precio">
                  <small>{{$errors->first('price')}}</small>
      </div>

      <div class="">
          <input class="input" type="text" name="colour" value="{{old("colour")}}" placeholder="Color">
                  <small>{{$errors->first('colour')}}</small>
      </div>

      <div class="">
            <input class="input" type="text" name="size" value="{{old("size")}}" placeholder="Talle">
                  <small>{{$errors->first('size')}}</small>
      </div>

      <div class="">
            <input class="input" type="text" name="description" value="{{old("description")}}" placeholder="Descripción">
                    <small>{{$errors->first('description')}}</small>
      </div>

      <div class="">
           <input class="input" type="file" name="cover" value="" placeholder="Imagen">
      </div>


        <button class="registroSubmit" type="submit" name="button">Enviar</button>

      </form>
      </div>
  </body>
</html>
