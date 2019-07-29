<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="shortcut icon" href="../image/favicon.png">
	<title>Home</title>
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

		 		<div class="slider">
		 		@include('/layouts/carousel')
		 		</div>

				@include('/layouts/categories')

		<div class="contentAll">
			<div class="product">
				<h2>DESTACADOS</h2>

				<ul>
					<li>
						<img src="../image/prod_girl.png">
						<a href="#">PRODUCTO NOMBRE</a>
						<a href="#" class="price">$90,00</a>
						<span class="neon"></span>
					</li>
					<li><img src="../image/prod_man.png">
						<a href="#">PRODUCTO NOMBRE</a>
						<a href="#" class="price">$90,00</a>
						<span class="neon2"></span>
					</li>
					<li>
						<img src="../image/prod_girl.png">
						<a href="#">PRODUCTO NOMBRE</a>
						<a href="#" class="price">$90,00</a>
						<span class="neon"></span>
					</li>
					<li>
						<img src="../image/prod_man.png">
						<a href="#">PRODUCTO NOMBRE</a>
						<a href="#" class="price">$90,00</a>
						<span class="neon2"></span>
					</li>
					<li>
						<img src="../image/prod_girl.png">
						<a href="#">PRODUCTO NOMBRE</a>
						<a href="#" class="price">$90,00</a>
						<span class="neon"></span>
					</li>
					<li>
						<img src="../image/prod_man.png">
						<a href="#">PRODUCTO NOMBRE</a>
						<a href="#" class="price">$90,00</a>
						<span class="neon2"></span>
					</li>
					<li>
						<img src="../image/prod_girl.png">
						<a href="#">PRODUCTO NOMBRE</a>
						<a href="#" class="price">$90,00</a>
						<span class="neon"></span>
					</li>
					<li>
						<img src="../image/prod_man.png">
						<a href="#">PRODUCTO NOMBRE</a>
						<a href="#" class="price">$90,00</a>
						<span class="neon2"></span>
					</li>
					<li>
						<img src="../image/prod_girl.png">
						<a href="#">PRODUCTO NOMBRE</a>
						<a href="#" class="price">$90,00</a>
						<span class="neon"></span>
					</li>
			</ul>

			</div>
		</div>

		<div class="contentAll">

      @include('../layouts/footer')

		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../js/index.js"></script>
</body>
</html>
