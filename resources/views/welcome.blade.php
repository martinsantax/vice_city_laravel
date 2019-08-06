@extends('master')
	@section('welcome')
			<title>Home</title>

		 		<div class="slider">
		 		@include('/layouts/carousel')
		 		</div>

				@include('/layouts/categories')

		<div class="contentAll">
			<div class="product">
				<h2>DESTACADOS</h2>

				<ul>
						@foreach ($products as $product)
						<li>
							<a href="/product/{{$product->id}}"><img src="/storage/products/{{$product->image}}"></a>
							<a href="/product/{{$product->id}}">{{$product->name}}</a>
							<a class="price">${{$product->price}}</a>
							<a href="/category/{{$product->category_id}}"></a>
							<span class="neon"></span>
						</li>
						@endforeach
				</ul>

			</div>
		</div>

	@endsection
