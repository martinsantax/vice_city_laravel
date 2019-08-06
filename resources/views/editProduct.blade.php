<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="shortcut icon" href="../image/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <title>Modificar/editar Productos</title>
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

        @include('/layouts/categories')

        <div class="contenedor_edit">

      <div class="close_ed">
        <a href="/products">X</a>
      </div>



        <ul class="edit_img">

            <li>
              <a href="/product/{{$product->id}}"><img src="/storage/products/{{$product->image}}"></a>
              <a href="/editProduct/{{$product->id}}"></a>
              <a href="/editProduct"></a>
              <!--<a href="/product/{{$product->id}}">{{$product->name}}</a>-->
              <!--<a class="price">${{$product->price}}</a>-->
              <a href="/category/{{$product->category_id}}"></a>
              <span class="neon"></span>
            </li>

        </ul>


        <div class="form_edit">
        <form class="" action="/editProduct" method="post" enctype="multipart/form-data">
        @csrf
        <div class="edit_line_form">
          <input class="input" type="text" name="name" value="{{$product->name}}" placeholder="Nombre de Producto">
             <div class="error">
                {{$errors->first('name')}}
             </div>
        </div>

        <div class="">
        <select class="input" name="top" value="{{$product->top}}">
          <option disabled selected>Destacado</option>
          <option value="1">Si</option>
          <option value="0">No</option>
        </select>
        </div>

        <div class="edit_line_form">
          <select class="input" type="text" name="category_id" >
              <option disabled selected>Categoria</option>
            @foreach ($categories as $category)
              <option value="{{$category->id}}"
                @if($category->id==$product->category_id)
                  selected
                @endif>{{$category->name}}
              </option>
            @endforeach
          </select>
                  <div class="error">
                     {{$errors->first('category_id')}}
                  </div>
        </div>

      <div class="edit_line_form">
          <input class="input" type="number" name="price" value="{{$product->price}}" placeholder="Precio">
             <div class="error">
                {{$errors->first('price')}}
             </div>
      </div>

     <div class="edit_line_form">
          <input class="input" type="number" name="stock" value="{{$product->stock}}" placeholder="Cantidad">
             <div class="error">
                {{$errors->first('stock')}}
             </div>
      </div>

      <div class="edit_line_form">
          <select class="input" type="text" name="colour_id">
              <option disabled selected>Color</option>
            @foreach ($colours as $colour)
              <option name="colour_id" value="{{$colour->id}}"
                @if($colour->id==$product->colour_id)
                  selected
                @endif
                >{{$colour->name}}</option>
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
               <option name="size_id" value="{{$size->id}}"
                @if($size->id==$product->size_id)
                  selected
                @endif
                >{{$size->name}}</option>
             @endforeach
           </select>
             <div class="error">
                {{$errors->first('size_id')}}
             </div>
         </div>

      <div class="edit_line_form">
            <input class="input" type="text" name="description" value="{{$product->description}}" placeholder="Descripción">
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
      <input type="hidden" name="product_id" value="{{$product->id}}">


        <button class="button_pg_edit" type="submit" name="button">Modificar</button>

        <form action="/editProduct/{{$product->id}}" method="post" >
          @csrf
        <button class="button_pg_edit" type="submit" name="button">Borrar</button>
        </form>
      </form>


    </div>
    </div>

     @include('/layouts/footer')
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../js/index.js"></script>
  </body>
</html>
