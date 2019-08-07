<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/index.css')}}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body class="adm">
    <div class="contenedor_addP">
      <div class="container">

    <div class="contentAll">

      <div class="agregar">
        <h1>AGREGAR PRODUCTOS</h1>
        <a class="close_agre" href="/adm">X</a>
      </div>

      <form class="" action="/addProduct" method="post" enctype="multipart/form-data">
        @csrf
        <div class="edit_line_form">
          <input class="input" type="text" name="name" value="{{old("name")}}" placeholder="Nombre de Producto">
             <div class="error">
                {{$errors->first('name')}}
             </div>
        </div>

        <div class="edit_line_form">
          <select class="input" type="text" name="category_id">
              <option disabled selected>Categoria</option>
            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
                  <div class="error">
                     {{$errors->first('category_id')}}
                  </div>
        </div>

      <div class="edit_line_form">
          <input class="input" type="number" name="price" value="{{old("price")}}" placeholder="Precio">
             <div class="error">
                {{$errors->first('price')}}
             </div>
      </div>

      <div class="edit_line_form">
          <input class="input" type="number" name="stock" value="{{old("stock")}}" placeholder="Cantidad">
             <div class="error">
                {{$errors->first('stock')}}
             </div>
      </div>

      <div class="edit_line_form">
          <select class="input" type="text" name="colour_id">
              <option disabled selected>Color</option>
            @foreach ($colours as $colour)
              <option name="colour_id" value="{{$colour->id}}">{{$colour->name}}</option>
            @endforeach
          </select>
            <div class="error">
              {{$errors->first("colour_id")}}
            </div>
        </div>

        <div class="edit_line_form">
           <select class="input" type="text" name="size_id">
               <option disabled selected>Talle</option>
             @foreach ($sizes as $size)
               <option name="size_id" value="{{$size->id}}">{{$size->name}}</option>
             @endforeach
           </select>
             <div class="error">
                {{$errors->first('size_id')}}
             </div>
         </div>

      <div class="edit_line_form">
            <input class="input" type="text" name="description" value="{{old("description")}}" placeholder="Descripción">
              <div class="error">
                {{$errors->first('description')}}
              </div>
      </div>

      <div class="">
        <div class="input">
           <input class="input" type="file" name="cover" value="" placeholder="Imagen">
        </div>
        <div class="error">
          {{$errors->first('cover')}}
        </div>
      </div>

        <button class="button_pg_edit" id="boton" type="submit" name="button">Enviar</button>

      </form>

      </div>
    </div>

  </body>
</html>
