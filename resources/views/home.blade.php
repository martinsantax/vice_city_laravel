<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="shortcut icon" href="../image/favicon.png">

	<title>VICE CITY PERFIL</title>
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
		<div class="contentAll">
			<h2 class="titlePerfil">PERFIL</h2>

			<div class="containerForm">
				<div class="detailsPerfil">

					<div class="avatar">
            <img src="" alt="">
					 </div>

					<div class="textPerfil">
						<p>{{Auth::user()->name}}</p>
            <p>{{Auth::user()->surname}}</p>
					</div>
				</div>

				<form method="post" class="perfilForm" enctype="multipart/form-data">
          @csrf
					<div>
						<p class="form_perfil">Email</p>
	                  	<input class="input" type="email" name="email" value="" placeholder="">
	        </div>

					<div>
						<p class="form_perfil">Teléfono</p>
	                  	<input class="input" type="Telefono" name="telefono" value="" placeholder="">
	       </div>

	        <div>
	           	<p class="form_perfil">DNI</p>
	            <input class="input" type="text" name="DNI" value="" placeholder="">
          </div>

	         <div>
	           	<p class="form_perfil">Dirección</p>
	            <input class="input" type="text" name="direccion" value="" placeholdder="">
	         </div>

          <div>
	         	  <p class="form_perfil">Código Postal</p>
	            <input class="input" type="text" name="postal" value="" placeholder="">
	        </div>

	         <div>
	            <p class="form_perfil">Ciudad</p>
	            <input class="input" type="text" name="ciudad" value="" placeholder="">
	         </div>

	          <div>
	             <p class="form_perfil">Fecha de Nacimiento</p>
	             <input class="input" type="date" name="nacimiento"  value="">
	          </div>

	        <input class="pefilSubmit" type="submit" value="Actualizar">
				</form>

			</div>
		</div>

    <div class="contentAll">

      @include('../layouts/footer')

    </div>
		</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../java/FAQs.js"></script>
</body>
</html>
