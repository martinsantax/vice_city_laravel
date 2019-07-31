<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="shortcut icon" href="../image/favicon.png">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
		<title>Productos</title>
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

		<div class="contentAll">
			<div class="product" >
				<h8>TODOS LOS PRODUCTOS</h8>

				<div class="wrapper">
					<div class="searchbox">
						<input type="text" class="input">

						<div class="searchbtn">
							<i class="fas fa-search"></i>
						</div>

					</div>
				</div>

				<ul>
						@foreach ($products as $product)

           	<li>
								<a href="/product/{{$product->id}}"><img src="/storage/products/{{$product->image}}"></a>
								<a href="/product/{{$product->id}}">{{$product->name}}</a>
								<a class="price">${{$product->price}}</a>
								<a href="/category/{{$product->category_id}}"></a>
					  </li>
						@endforeach
				</ul>
				<hr class="paginationHr">
				{{$products->links()}}
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
