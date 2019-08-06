<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="shortcut icon" href="../image/favicon.png">
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

      @yield('welcome')
      @yield('FAQs')
      @yield('products')
      @yield('product')
      @yield('cart')
      @yield('history')
			@yield('home')
			@yield('editProduct')

     <div class="contentAll">
        @include('../layouts/footer')
     </div>
   </div>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript" src="js/jQuery.js"></script>
   <script type="text/javascript" src="js/index.js"></script>
   <script type="text/javascript" src="js/app.js"></script>
  </body>
  </html>
