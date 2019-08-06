@extends('master')
	@section('products')
		<title>Productos</title>

				@include('/layouts/categories')

		<div class="contentAll">
			<div class="product" >
				<h8>TODOS LOS PRODUCTOS</h8>

				<fieldset class="field-container">
					<form class="" action="/searchProduct" method="get">
						@csrf
				  	<input type="text" name="name" placeholder="Buscar..." class="field" />
					</form>
				  <div class="icons-container">
				    <div class="icon-search"></div>
				    <div class="icon-close">
				      <div class="x-up"></div>
				      <div class="x-down"></div>
				    </div>
				  </div>
				</fieldset>

				<ul>
						@foreach ($products as $product)
						<li>
							<a href="/product/{{$product->id}}"><img src="/storage/products/{{$product->image}}"></a>
							<a href="/product/{{$product->id}}">{{$product->name}}</a>
							<a class="price">${{$product->price}}</a>
							<a href="/category/{{$product->category_id}}"></a>
							<span class="neon"></span>

    						@if (Auth::user() && Auth::user()->admin)
    							<button class="SubmitEdit" type="submit" name="button">
										<a href="/editProduct/{{$product->id}}">Editar</a>
									</button>
							  	<form action="/editProduct/{{$product->id}}" method="post">
          					@csrf
        				    <button class="SubmitEdit" type="submit" name="button">Borrar</button>
        					</form>
						   @endif
						</li>
						@endforeach
				</ul>

				<hr class="paginationHr">
				{{$products->links()}}
			</div>
		</div>

	@endsection
